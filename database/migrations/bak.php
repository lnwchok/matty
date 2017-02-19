            $table->increments('id');
            $table->integer('bqcat');
            $table->string('bqcode',30);
            $table->string('size1',20);
            $table->string('size2',20);
            $table->string('descr');
            $table->float('qty');
            $table->timestamps();