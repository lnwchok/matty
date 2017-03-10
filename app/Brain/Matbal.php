<?php

namespace App\Brain;

use App\Bqreq;
use App\Matcode;
use DB;

class Matbal
{
	public static function showAll($cat = null) {
    	return empty($cat) ? static::calc()->get() : static::calc()->get()->where('bqcat', $cat);
	}

	public static function showShortageItem($cat = null) {
    	return empty($cat) ? 
    		static::calc()
    		->where(DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0)'),'>',0)
    		->get() 
    		: 
    		static::calc()
    		->where(DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0)'),'>',0)
    		->get()
    		->where('bqcat', $cat);		
	}

	public static function showOverItem($cat = null) {
    	return empty($cat) ? 
    		static::calc()
    		->where(DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0)'),'<',0)
    		->get() 
    		: 
    		static::calc()
    		->where(DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0)'),'<',0)
    		->get()
    		->where('bqcat', $cat);
	}

	public function getCats() {
		return $this->calc()
			->select('bqreqs.bqcats_id as id' ,'bqcats.descr as descr')
			->distinct()
			->leftjoin('bqcats','bqreqs.bqcats_id','=','bqcats.id')
			->get()
			->toArray();
	}

	public static function calc() {
		return Bqreq::leftjoin('bqprocs', 'bqreqs.bqcode', '=', 'bqprocs.code')
			->select(
				'bqreqs.bqcats_id as bqcat',
				'bqreqs.bqcode as bqcode',
				'bqreqs.size1 as size1',
				'bqreqs.size2 as size2',
				'bqreqs.descr as descr',
				DB::raw('COALESCE(bqreqs.qty,0) as req_qty'),
				DB::raw('COALESCE(bqprocs.qty,0) as po_qty'),
				DB::raw('COALESCE(bqreqs.qty,0)-COALESCE(bqprocs.qty,0) as diff')
				)
      		->orderBy('bqreqs.bqcats_id');
	}

	public static function findMatCode() {

		return Matcode::rightjoin('bqreqs','matcodes.code','=','bqreqs.bqcode')
			->select('bqreqs.bqcode')
			->where('matcodes.code')
			->get();

	}

}
