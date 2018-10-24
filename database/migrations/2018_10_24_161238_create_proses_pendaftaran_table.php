<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProsesPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proses_pendaftaran', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('tujuan_poli_pasien', 191);
			$table->string('nomor_antrian', 191);
			$table->integer('user_id')->unsigned()->index('proses_pendaftaran_user_id_foreign');
			$table->integer('pasien_id')->unsigned()->index('proses_pendaftaran_pasien_id_foreign');
			$table->string('keluhan_pasien');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proses_pendaftaran');
	}

}
