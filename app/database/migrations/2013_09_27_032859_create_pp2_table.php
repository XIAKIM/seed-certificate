<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePp2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp2', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyName');
			$table->string('ownerName');
			$table->text('companyAddress');
			$table->string('arrivalCity');
			$table->string('arrivalCountry');
			$table->string('arrivalCheckpoint');
			$table->string('arrivalVehicle');
			$table->string('departureCity');
			$table->string('departureCountry');
			$table->string('departureCheckpoint');
			$table->string('departureVehicle');
			$table->string('transportRoute');
			$table->string('temporayLocation');
			$table->string('passingPeriod');
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
		Schema::drop('pp2');
	}

}
