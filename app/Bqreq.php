<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bqreq extends Model
{
    public function show()
    {
/*    	return Bqreq::leftJoin('bqcats','bqreqs.bqcat','=','bqcats.id')
    		->select('bqreqs.bqcode','bqreqs.size1','bqreqs.size2','bqreqs.descr','bqreqs.qty','bqcats.code');*/
    	return Bqreq::all();
    }

    public function count_rec()
    {
    	return Bqreq::count();
    }
}
