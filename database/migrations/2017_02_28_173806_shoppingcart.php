<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Shoppingcart extends Migration
{

    public function up()
    {
        Schema::create('product_users', function(Blueprint $table)
        {
            $table->increments('num')->unique();
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('isorder')->default('0');
            $table->integer('info_id')->unsigned()->index();
            $table->foreign('info_id')->references('id')->on('product_users_info')->onDelete('cascade');
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
