<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema:: create('articulo',function(Blurprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->double('precio');
            $table->string('password');
            $table->timestamp();
            
        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //
        Schema::drop('articulo');
    }
}
