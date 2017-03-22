<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Paginas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table){
        $table->increments('id');
        $table->string('menu');
        $table->string('titel');
        $table->string('tekst');
        $table->binary("image")->nullable();
    });
        Schema::create('shops', function (Blueprint $table){
            $table->increments('id');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
        });
        Schema::create('expos', function (Blueprint $table){
            $table->increments('id');
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
        });
        Schema::create('workshops', function (Blueprint $table){
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_datet');
            $table->string('duration');
            $table->integer('price');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
        });
        Schema::create('photos', function (Blueprint $table){
        $table->increments('id');
        $table->date('start_date');
        $table->date('end_datet');
        $table->string('duration');
        $table->integer('price');
        $table->integer('friendprice');
        $table->string('menu');
        $table->string('titel');
        $table->string('tekst');
        $table->binary("image")->nullable();
    });
        Schema::create('friends', function (Blueprint $table){
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_datet');
            $table->string('duration');
            $table->integer('price');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
        });

        Schema::create('about', function (Blueprint $table){
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_datet');
            $table->string('duration');
            $table->integer('price');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
        });
        Schema::create('contact', function (Blueprint $table){
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_datet');
            $table->string('duration');
            $table->integer('price');
            $table->string('menu');
            $table->string('titel');
            $table->string('tekst');
            $table->binary("image")->nullable();
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
