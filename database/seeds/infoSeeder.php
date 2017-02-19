<?php

// namespace App;


use Illuminate\Database\Seeder;

use App\Info as infos;


class infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// bqs::truncate();
        infos::create([
        		'name' => 'MyProject',
        		'descr' => 'This is sample project'
        	]); 
        
    }
}