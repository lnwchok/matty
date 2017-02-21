<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bqproc;
use App\Info;

class BqprocsController extends Controller
{
    public function index() {
		$pj = Info::first();

		$bqs = Bqproc::all();
		$count = Bqproc::count();

		return view('bqproc.index', compact('bqs','pj','count'));    	
    }
}
