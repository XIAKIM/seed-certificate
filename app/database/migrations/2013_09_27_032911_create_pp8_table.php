<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/** PP8 */
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
			$table->integer('certificateType');
			$table->string('speciesType');
			$table->string('speciesName');
			$table->string('scientificName');
			$table->integer('unit');
			$table->string('source');
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
		Schema::drop('pp8');
	}

}
