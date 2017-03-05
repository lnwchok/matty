<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Bqreq;
use App\Bqcat;
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

	public function index(Request $request) {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();
		$filter = Bqcat::where('descr',$request->input('filter'))->pluck('id')->toArray();
		$bqs = Matbal::showAll(!empty($filter) ? $filter[0] : null);
		$filters = (new Matbal)->getCats();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title', 'filters'));  
	}

	public function shortageItem(Request $request) {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();
		$filter = Bqcat::where('descr',$request->input('filter'))->pluck('id')->toArray();
		$bqs = Matbal::showShortageItem(!empty($filter) ? $filter[0] : null);
		$filters = (new Matbal)->getCats();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title', 'filters'));  
	}

	public function overItem(Request $request) {
    	$title = $this->page_title;
    	$custs = $this->balcust;
		$pj = Info::first();
		$filter = Bqcat::where('descr',$request->input('filter'))->pluck('id')->toArray();
		$bqs = Matbal::showOverItem(!empty($filter) ? $filter[0] : null);
		$filters = (new Matbal)->getCats();

		return view('bqbal.index', compact('pj', 'bqs', 'custs', 'title', 'filters'));  
	}

}
