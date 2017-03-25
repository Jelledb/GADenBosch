<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table){
            $table->increments('id');
            $table->increments('parentid')->default(0);
            $table->string('menu');
            $table->string('title');
            $table->text('text');
            $table->smallInteger('sort')->default(0);
            $table->enum('show', ['yes', 'no'])->default('yes');
            $table->string('color');
            $table->tinyInteger('template')->default(1);
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
