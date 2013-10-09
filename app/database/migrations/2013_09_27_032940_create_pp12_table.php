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
			$table->string('companyName');
			$table->string('certificateType');
			$table->integer('certificateNumber');
			$table->string('locationType');
			$table->text('newLocation');
			$table->integer('userID');
			$table->integer('requestID');
			$table->timestamps();
			

			// $table->string('newLocation'); 
			$table->string('newLocationAddressNo');
			$table->string('newLocationAddressMoo');
			$table->string('newLocationAddressSoi');
			$table->string('newLocationAddressRoad');
			$table->string('newLocationAddressSubDistrict');
			$table->string('newLocationAddressDistrict');
			$table->string('newLocationAddressProvince');
			$table->string('newLocationAddressPostCoe');
		
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
