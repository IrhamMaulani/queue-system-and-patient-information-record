<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomorAntrianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor_antrian', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('biru')->nullable();;
            $table->integer('merah_muda')->nullable();;
            $table->integer('hijau')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomor_antrian');
    }
}
