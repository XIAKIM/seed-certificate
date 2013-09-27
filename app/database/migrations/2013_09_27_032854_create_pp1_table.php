<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePp1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp1', function(Blueprint $table) {
			$table->increments('id');
			$table->string('certificateType');
			$table->string('companyName');
			$table->string('ownerName');
			$table->string('companyAddress');
			$table->string('collectingLocation');
			$table->string('storingAddress');
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
		Schema::drop('pp1');
	}

}
