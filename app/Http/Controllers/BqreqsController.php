<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bqreq;
use App\Info;

class BqreqsController extends Controller
{

	protected $page_title = "Material Required";

    public function index() 
    {
    	$title = $this->page_title;
		
		$pj = Info::first();
		$bqs = Bqreq::all();
		$count = Bqreq::count();

	    return view('bqreqs.index', compact('title','pj','bqs','count'));
    }
}
