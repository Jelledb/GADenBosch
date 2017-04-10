<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkspaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workspace', function(Blueprint $table) {
           $table->increments('id');
           $table->integer('workspace_type_id')->unsigned();
           $table->integer('size_id')->unsigned();
           $table->foreign('workspace_type_id')->references('id')->on('workspace_type')->onDelete('cascade');
           $table->foreign('size_id')->references('id')->on('workspace_size')->onDelete('cascade');
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
