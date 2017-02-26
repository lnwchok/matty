<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Brain\Matbal;

class BqbalsController extends Controller
{

	protected $balcust = 
		array(
			array('name' => 'All', 'link' => '/balance'),
			array('name' => 'ShortageItem','link' => '/balance/shortage'),
			array('name' => 'OverItem','link' => '/balance/over')
			);
			 
	public function index() {
    	$title = 'MBL';
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showAll();

		return view('bqbal.index', compact('pj', 'bqs', 'custs'));  
	}

	public function shortageItem() {
    	$title = 'MBL';
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showShortageItem();

		return view('bqbal.index', compact('pj', 'bqs', 'custs'));  
	}

	public function overItem() {
    	$title = 'MBL';
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showOverItem();

		return view('bqbal.index', compact('pj', 'bqs', 'custs'));  
	}

}
