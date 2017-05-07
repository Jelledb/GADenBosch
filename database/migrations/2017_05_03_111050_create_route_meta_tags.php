<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteMetaTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Pivot table for reservation/workspace
        Schema::create('route_meta_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route');
            $table->string('title');
            $table->string('description', 160);
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
