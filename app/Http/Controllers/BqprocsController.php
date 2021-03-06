<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bqproc;
use App\Info;
use Excel;
use DB;
use Redirect;

class BqprocsController extends Controller
{

	protected $page_title = "Material Procurement";
	
    public function index() {
    	$title = $this->page_title;

		$pj = Info::first();

		$bqs = Bqproc::all();
		$count = Bqproc::count();

		return view('bqproc.index', compact('bqs','pj','count', 'title'));    	
    }

    public function importExcel()
    {
		$dat = Excel::selectSheets(0)->load($this->getXlsfile())->get();

		if (!empty($dat))
			{
				DB::table('bqprocs')->truncate();
				DB::table('bqprocs')->insert($dat->toArray());
			}
			
		return Redirect::to('bqprocs'); 
    }

    protected function getXlsfile() {
		$path = env('PO_LINK',NULL);
		$file = env('PO_XLS_FILE',NULL);
		if (empty($path || $file)) {
			return 'Not found';
		} 
		else {
			return $xlsfile = $path . '/' . $file . '.xls';
		}
	}
}
