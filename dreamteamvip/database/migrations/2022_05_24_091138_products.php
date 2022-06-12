<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->string('tenSp',255);
            $table->integer('gia');
            $table->integer('giaSale');
            $table->string('loaiSp',255);
            $table->integer('quantity');
            $table->string('imgProduct',255);
            $table->string('property',255);
            $table->string('hang',255);
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
}
