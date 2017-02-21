<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBqprocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bqprocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pono', 20)->nullable();
            $table->string('code',30)->nullable();
            $table->string('size1',20)->nullable();
            $table->string('size2',20)->nullable();
            $table->text('descr')->nullable();
            $table->float('qty')->default(0);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bqprocs');
    }
}
