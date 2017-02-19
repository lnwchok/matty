<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(bqreqSeeder::class);
        $this->call(infoSeeder::class);
        $this->call(bqcatSeeder::class);
        
    }
}
