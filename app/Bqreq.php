<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bqreq extends Model
{
/*
    public function show()
    {
    	return Bqreq::leftJoin('bqcats','bqreqs.bqcat','=','bqcats.id')
    		->select(
    			'bqreqs.bqcode as bqcode',
    			'bqreqs.size1 as size1',
    			'bqreqs.size2 as size2',
    			'bqreqs.descr as descr',
    			'bqreqs.qty as qty',
    			'bqcats.code as bqcat')
    		->get();
    	// return Bqreq::all();
    }

    public function count_rec()
    {
    	return Bqreq::count();
    }
*/

    public function getSum() {
        return Bqreq::selectRaw('sum(qty) as val')->pluck('val')->first();
    }

    public function getSumbyCat() {
        return Bqreq::selectRaw('bqcats.code as code,sum(bqreqs.qty) as qty')
            ->groupby('bqcats.code')
            ->leftjoin('bqcats','bqreqs.bqcat','=','bqcats.id')
            ->get()
            ->toArray();
    }
}
