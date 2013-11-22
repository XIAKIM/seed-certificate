<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/** PP11 */
class CreatePp11Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pp11', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyName');
			$table->string('certificateType');
			$table->integer('certificateID');
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
		Schema::drop('pp11');
	}

}
