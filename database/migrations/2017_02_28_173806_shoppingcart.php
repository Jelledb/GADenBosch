<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Shoppingcart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::create('shoppingcart', function (Blueprint $table) {
//
//            $table->unsignedInteger('product_id');
//            $table->unsignedInteger('user_id');
//
//            $table->foreign('product_id')->references('id')->on('products');
//            $table->foreign('user_id')->references('id')->on('users');
//        });
//    }
    public function up()
    {
        Schema::create('product_users', function(Blueprint $table)
        {
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('isorder')->default('0');

        });

        DB::statement('ALTER Table product_users add num INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');


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
