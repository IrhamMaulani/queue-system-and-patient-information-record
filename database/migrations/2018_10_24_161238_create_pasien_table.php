<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pasien', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name_pasien', 191);
			$table->string('nomor_bpjs', 20);
			$table->date('ttl_pasien');
			$table->string('nomor_buku_pasien', 191);
			$table->string('alamat_pasien', 191);
			$table->string('kepala_keluarga', 191);
			$table->char('jenis_kelamin', 2);
			$table->string('identitas_pasien', 191)->unique('identitas_pasien');
			$table->string('tempat_lahir', 191);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pasien');
	}

}
