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
            $table->integer('bqcat');
            $table->string('bqcode',30)->nullable();
            $table->string('size1',20);
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
        Schema::dropIfExists('bqreqs');
    }
}
