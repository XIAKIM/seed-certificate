<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('request', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('formNumber');
			$table->integer('requestNumber');
			$table->dateTime('date');
			$table->string('status');
			$table->text('message');
			$table->integer('userID');
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
		Schema::drop('request');
	}

}
