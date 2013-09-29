<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePp9Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp9', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyName');
			$table->integer('certificateNumber');
			$table->dateTime('createDate');
			$table->dateTime('expiredDate');
			$table->string('speciesType');
			$table->string('scientificName');
			$table->string('speciesName');
			$table->integer('unit');
			$table->integer('amount');
			$table->integer('value');
			$table->string('departureCountry');
			$table->string('departureCheckpoint');
			$table->dateTime('departureDate');
			$table->integer('requestID');
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
		Schema::drop('pp9');
	}

}
