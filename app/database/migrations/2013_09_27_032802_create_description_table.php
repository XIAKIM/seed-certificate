<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('description', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('age');
			$table->string('nationality');
			$table->string('identificationType');
			$table->integer('identificationNumber');
			$table->string('issuedDistrict');
			$table->string('issuedProvince');
			$table->string('address');
			$table->integer('telNumber');
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
		Schema::drop('description');
	}

}
