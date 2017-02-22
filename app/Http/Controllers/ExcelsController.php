<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Excel;
use DB;

class ExcelsController extends Controller
{

	// protected $path = '/home/mps0229/Desktop/test.xls';
	protected $path = '/media/sf_My_Share/w1/test.xls';

	public function index()
	{
		return view('test');
	}

    public function importExcel()
    {
		$dat = Excel::selectSheets(0)->load($this->path)->get();

		if (!empty($dat))
			{
				DB::table('bqprocs')->insert($dat->toArray());
			}
			
		return Redirect::to('excels'); 
    }
}
