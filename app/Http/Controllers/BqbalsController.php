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
			 
	protected $page_title = "Material Status";

	public function index() {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showAll();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title'));  
	}

	public function shortageItem() {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showShortageItem();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title'));  
	}

	public function overItem() {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();

		$bqs = Matbal::showOverItem();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title'));  
	}

}
