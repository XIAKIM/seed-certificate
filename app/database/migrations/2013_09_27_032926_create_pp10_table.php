<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePp10Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp10', function(Blueprint $table) {
			$table->increments('id');
			$table->string('certificateType');
			$table->integer('certifivateNumber');
			$table->string('companyName');
			$table->string('ownerName');
			$table->string('companyAddress');
			$table->string('collectingLocation');
			$table->string('storingLocation');
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
		Schema::drop('pp10');
	}

}
