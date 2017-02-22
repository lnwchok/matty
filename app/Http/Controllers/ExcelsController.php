<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Excel;
use DB;

class ExcelsController extends Controller
{

	// protected $path = env('PO_LINK') . 'test.xls';
	// protected $path = '/media/sf_My_Share/w1/test.xls';
	// protected $xlsfile = 'test.xls';


	/***
	 *
	 * Add in .env file to enable this class
	 *
	 *	PO_LINK=home/sitthichok/Desktop
	 *	PO_XLS_FILE=test
	 *
	 ***/

	protected function getXlsfile()
	{
		$path = env('PO_LINK',NULL);
		$file = env('PO_XLS_FILE',NULL);
		if (empty($path || $file)) {
			return 'Not found';
		} 
		else {
			return $xlsfile = $path . '/' . $file . '.xls';
		}
	}

	public function index()
	{
		return view('test');
	}

    public function importExcel()
    {
		$dat = Excel::selectSheets(0)->load($this->getXlsfile())->get();

		if (!empty($dat))
			{
				DB::table('bqprocs')->truncate();
				DB::table('bqprocs')->insert($dat->toArray());
			}
			
		return Redirect::to('excels'); 
    }
}
