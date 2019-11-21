<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agreement_id');
            $table->unsignedBigInteger('assortment_id');
            $table->integer('current_quantity');
            $table->integer('quantity');

            $table->foreign('agreement_id')->references('id')->on('agreement');
            $table->foreign('assortment_id')->references('id')->on('assortment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
