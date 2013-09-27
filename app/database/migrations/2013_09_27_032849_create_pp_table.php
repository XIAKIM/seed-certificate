<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyName');
			$table->string('certificationType');
			$table->string('speciesType');
			$table->string('commonName');
			$table->string('scientificName');
			$table->string('speciesName');
			$table->string('tradeMark');
			$table->string('collectingLocation');
			$table->string('fSpeciesOwner');
			$table->string('mSpeciesOwner');
			$table->string('dominance');
			$table->string('properArea');
			$table->string('properWeather');
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
		Schema::drop('pp');
	}

}
