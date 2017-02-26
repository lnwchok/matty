<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bqproc extends Model
{

	public function getSum() {
		return Bqproc::selectRaw('sum(qty) as val')->pluck('val')->first();
	}
}
