<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bqreq;
use App\Bqcat;
use App\Info;

class BqreqsController extends Controller
{

	protected $page_title = "Material Required";

    public function index(Request $request) 
    {
    	$title = $this->page_title;
		
		$pj = Info::first();

		$filter = Bqcat::where('descr',$request->input('filter'))->pluck('id')->toArray();
		$bqs = (new Bqreq)->show(!empty($filter) ? $filter[0] : null);
		$count = Bqreq::count();

		$filters = (new Bqreq)->getCats();

	    return view('bqreqs.index', compact('title','pj','bqs','count','filters'));
    }
}
