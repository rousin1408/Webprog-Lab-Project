<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->references('id')->on('header_transaction')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('total_price_all');
            $table->timestamps();
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
};
