<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });


        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description_short')->nullable();
            $table->string('description_long')->nullable();
            $table->binary("image")->nullable();
            $table->unsignedInteger('cat_id')->nullable();

            $table->foreign('cat_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
