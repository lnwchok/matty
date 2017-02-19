<?php

// namespace App;


use Illuminate\Database\Seeder;

use App\Bqcat as bqcats;


class bqcatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// bqs::truncate();
        bqcats::create([
        		'id' => 1,
        		'code' => 'PIP',
                'descr' => 'Pipe'
        	]); 
        bqcats::create([
                'id' => 2,
                'code' => 'FIT',
                'descr' => 'Fitting'
            ]); 
        bqcats::create([
                'id' => 3,
                'code' => 'FLG',
                'descr' => 'Flange'
            ]); 
        bqcats::create([
                'id' => 4,
                'code' => 'GAS',
                'descr' => 'Gasket'
            ]); 
        bqcats::create([
                'id' => 5,
                'code' => 'BLT',
                'descr' => 'Bolt/Nut'
            ]); 
        bqcats::create([
                'id' => 6,
                'code' => 'VLV',
                'descr' => 'Valve'
            ]); 
        bqcats::create([
                'id' => 7,
                'code' => 'ACC',
                'descr' => 'Accessories'
            ]); 
        bqcats::create([
                'id' => 8,
                'code' => 'INS',
                'descr' => 'Instrument EQ'
            ]); 
        
    }
}