<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the Sponsors table

        Schema::create('sponsors', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('photo');
            $table->enum('visible', ['yes', 'no']);
            $table->string('website');
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
