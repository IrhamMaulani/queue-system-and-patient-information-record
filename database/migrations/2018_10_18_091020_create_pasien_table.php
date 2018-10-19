<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_pasien');
            $table->integer('nomor_bpjs');
            $table->date('ttl_pasien');
            $table->string('nomor_buku_pasien');
            $table->string('alamat_pasien');
            $table->string('kepala_keluarga');
            $table->char('jenis_kelamin', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
