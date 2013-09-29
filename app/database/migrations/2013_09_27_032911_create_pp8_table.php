<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePp8Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp8', function(Blueprint $table) {
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
			$table->string('arrivalCountry');
			$table->string('source');
			$table->integer('PPNumber');
			$table->string('arrivalCheckpoint');
			$table->dateTime('arrivalDate');
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
		Schema::drop('pp8');
	}

}
