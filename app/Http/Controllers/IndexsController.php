<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Bqreq;
use App\Bqproc;

class IndexsController extends Controller
{
    public function index() {

    	$pj = Info::first();
    	$req_total = (new Bqreq)->getSum();
    	$req_list = (new Bqreq)->getSumbyCat();
    	$po = (new Bqproc)->getSum();

    	return view('index',compact('pj','req_list','req_total','po'));
    }
}
