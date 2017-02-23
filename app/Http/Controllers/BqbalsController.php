<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Matbal;

class BqbalsController extends Controller
{
	public function index() {
    	$title = 'MBL';

		$pj = Info::first();

		$bqs = Matbal::show();

		return view('bqbal.index', compact('pj', 'bqs'));  
	}
}
