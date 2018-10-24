<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProsesPendaftaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proses_pendaftaran', function(Blueprint $table)
		{
			$table->foreign('pasien_id')->references('id')->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('proses_pendaftaran', function(Blueprint $table)
		{
			$table->dropForeign('proses_pendaftaran_pasien_id_foreign');
			$table->dropForeign('proses_pendaftaran_user_id_foreign');
		});
	}

}
