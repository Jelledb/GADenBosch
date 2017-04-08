<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScheduleExpositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expositions', function(Blueprint $table){
            $table->increments('id');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('open_times')->default('do t/m zo van 13.00 - 17.00 uur');
            $table->string('extra');
            $table->date('opening');
            $table->time('opening_time')->default('16:00:00');
            $table->string('message');
            $table->string('title');
            $table->string('subtitle');
            $table->string('introduction');
            $table->text('text');
            $table->enum('location', ['exporuimte', 'portiersloge'])->default('exporuimte');
            $table->enum('toon', ['yes', 'no'])->default('yes');
            $table->tinyInteger('template')->default(1);
            $table->boolean('visible')->defualt(1);
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
