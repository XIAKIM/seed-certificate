<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/** PP9 */ 
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
			$table->string('speciesType');
			$table->string('speciesName');
			$table->string('scientificName');
			$table->integer('unit');
			$table->string('departureCountry');
			$table->integer('amount');
			$table->integer('pp1ID');
			$table->integer('userID');
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
