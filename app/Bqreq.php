<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bqreq extends Model
{

    public function show($filter = null) {
        
        return empty($filter) ? Bqreq::all() : Bqreq::all()->where('bqcats_id', $filter);
    }

    public function getSum() {
        return Bqreq::selectRaw('sum(qty) as val')->pluck('val')->first();
    }

    public function getSumbyCat() {
        return Bqreq::selectRaw('bqcats.code as code, sum(bqreqs.qty) as qty')
            ->groupby('bqcats.code')
            ->leftjoin('bqcats','bqreqs.bqcats_id','=','bqcats.id')
            ->get()
            ->toArray();
    }

    public function getCats() {
        return Bqreq::selectRaw('bqcats_id as id, bqcats.descr as descr')->distinct()
            ->leftjoin('bqcats','bqreqs.bqcats_id','=','bqcats.id')
            ->get()
            ->toArray();
    }
}
