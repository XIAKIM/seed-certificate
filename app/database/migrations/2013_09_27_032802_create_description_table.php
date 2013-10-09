<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/** Description */
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
			$table->string('lastName');
			$table->integer('age');
			$table->string('email');
			$table->string('nationality');
			$table->string('identificationType');
			$table->string('identificationNumber');
			$table->string('issuedDistrict');
			$table->string('issuedProvince');

			$table->text('userAddressNo');
			$table->text('userMoo');
			$table->text('userSoi');
			$table->text('userRoad');
			$table->text('userSubDistrict');
			$table->text('userDistrict');
			$table->text('userProvince');
			$table->text('userPostalCode');

			$table->string('telNumber');
			$table->integer('status');
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
