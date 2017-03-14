<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationWorkspaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Pivot table for reservation/workspace
        Schema::create('reservation_workspace', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
            $table->foreign('workspace_id')->references('id')->on('workspace')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public
    function down()
    {
        //
    }
}
