<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/** PP12 */
class CreatePp12Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp12', function(Blueprint $table) {
			$table->increments('id');
			$table->string('certificateType');
			$table->integer('certificateID');
			$table->string('relocationType');
			$table->string('newLocationAddressNo');
			$table->string('newLocationAddressMoo');
			$table->string('newLocationAddressSoi');
			$table->string('newLocationAddressRoad');
			$table->string('newLocationAddressSubDistrict');
			$table->string('newLocationAddressDistrict');
			$table->string('newLocationAddressProvince');
			$table->string('newLocationAddressPostalCode');
			$table->string('reason');
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
		Schema::drop('pp12');
	}

}
