<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBqreqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bqreqs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bqcats_id');
            $table->string('bqcode',30)->nullable();
            $table->string('size1',20);
            $table->string('size2',20)->nullable();
            $table->text('descr')->nullable();
            $table->float('qty')->default(0);
            $table->timestamps();

            // $table->foreign('bqcats_id')->references('id')->on('bqcats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bqreqs');
    }
}
