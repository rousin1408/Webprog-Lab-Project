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
        Schema::create('header_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->integer('total_price');
            $table->integer('total_product');
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
