<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses_pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tujuan_poli_pasien');
            $table->string('nomor_antrian');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proses_pendaftaran');
    }
}
