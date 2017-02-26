<?php

namespace App\Brain;

use App\Bqreq;
// use App\Bqproc;
use DB;

// use Illuminate\Database\Eloquent\Model;

class Matbal
{
	public static function showAll() {
    	return static::calc();
	}

	public static function showShortageItem() {
		// $bal = static::calc();
    	return static::calc()->where('diff','>',0);		
	}

	public static function showOverItem() {
    	return static::calc()->where('diff','<',0);
	}

	public static function calc() {
		return Bqreq::leftjoin('bqprocs', 'bqreqs.bqcode', '=', 'bqprocs.code')
			->select(
				'bqreqs.bqcat as bqcat',
				'bqreqs.bqcode as bqcode',
				'bqreqs.size1 as size1',
				'bqreqs.size2 as size2',
				'bqreqs.descr as descr',
				// 'bqreqs.qty as req_qty',
				DB::raw('COALESCE(bqreqs.qty,0) as req_qty'),
				// 'bqprocs.qty as po_qty',
				DB::raw('COALESCE(bqprocs.qty,0) as po_qty'),
				DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0) as diff')
				)
      		->orderBy('bqreqs.bqcat')
      		->get();
	}

}
