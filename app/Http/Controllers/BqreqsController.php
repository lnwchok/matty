<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bqreq;
use App\Info;

class BqreqsController extends Controller
{
	
    public function index() 
    {
		$title = 'MTO';
		
		$pj = Info::first();

		$bqreq = new Bqreq;
		$bqs = $bqreq->show();
		$count = $bqreq->count_rec();

	    return view('bqreqs.index', compact('title','pj','bqs','count'));
    }
}
