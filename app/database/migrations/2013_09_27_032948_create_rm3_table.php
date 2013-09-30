<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/** RM3 */
class CreateRm3Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rm3', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyName');
			$table->string('ownerName');
			$table->string('companyAddress');
			$table->string('certificateLanguage');
			$table->string('testType');
			$table->string('verifiedAmount');
			$table->string('commonName');
			$table->string('speciesName');
			$table->string('source');
			$table->string('chemical');
			$table->string('seedAmount');
			$table->string('totalWeight');
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
		Schema::drop('rm3');
	}

}
