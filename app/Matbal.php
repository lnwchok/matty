<?php

namespace App;

use App\Bqreq;
use App\Bqproc;
use DB;

// use Illuminate\Database\Eloquent\Model;

class Matbal
{
	public static function show() {

		$res = Bqreq::select();


    	return $res->get();
	}
}
