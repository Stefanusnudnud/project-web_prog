<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactionDetail', function (Blueprint $table) {
            $table->foreign('furniture_id')->references('id')->on('furniture');
            $table->foreign('transaction_id')->references('id')->on('transaction');
            $table->integer('quantity');

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
