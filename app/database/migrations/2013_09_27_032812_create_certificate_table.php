<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificate', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('certificateNumber');
			$table->string('createDate');
			$table->string('expiredDate');
			$table->string('type');
			$table->integer('userID');
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
		Schema::drop('certificate');
	}

}
