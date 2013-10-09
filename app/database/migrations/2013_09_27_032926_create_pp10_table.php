<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/** PP10 */
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

			// $table->text('companyAddress');
			$table->text('companyAddressNo');
			$table->text('companyAddressMoo');
			$table->text('companyAddressSoi');
			$table->text('companyAddressRoad');
			$table->text('companyAddressTambol');
			$table->text('companyAddressDistrict');
			$table->text('companyAddressProvince');
			$table->text('companyAddressPostalCode');

			// $table->text('collectingLocation');
			$table->text('collectingLocationNo');
			$table->text('collectingLocationMoo');
			$table->text('collectingLocationSoi');
			$table->text('collectingLocationRoad');
			$table->text('collectingLocationTambol');
			$table->text('collectingLocationDistrict');
			$table->text('collectingLocationProvince');
			$table->text('collectingLocationPostalCode');


			$table->text('storingLocation');
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
