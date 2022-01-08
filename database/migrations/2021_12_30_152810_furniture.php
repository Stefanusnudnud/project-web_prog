<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Furniture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('furniture', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('furnitureType');
            $table->string('color');
            $table->string('file_name');
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
