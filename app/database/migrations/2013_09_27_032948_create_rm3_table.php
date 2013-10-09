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
			$table->string('certificateLanguage');
			$table->string('testType');
			$table->string('verifiedAmount');
			$table->string('commonName');
			$table->string('speciesName');
			$table->string('source');
			$table->string('chemical');
			$table->string('seedAmount');
			$table->string('totalWeight');
			$table->integer('userID');
			$table->integer('requestID');
			$table->timestamps();

			// $table->string('companyAddress');
			$table->string('companyAddressNo');
			$table->string('companyAddressMoo');
			$table->string('companyAddressSoi');
			$table->string('companyAddressRoad');
			$table->string('companyAddressSubDistrict');
			$table->string('companyAddressDistrict');
			$table->string('companyAddressProvince');
			$table->string('companyAddressPostalCode');
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
