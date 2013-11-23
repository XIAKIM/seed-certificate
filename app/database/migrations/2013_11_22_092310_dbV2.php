<?php

use Illuminate\Database\Migrations\Migration;

class DbV2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('pp2',function($table)	{
			$table->renameColumn('companyAdressNo','companyAddressNo');
			$table->renameColumn('companyAdressMoo','companyAddressMoo');
			$table->renameColumn('companyAdressSoi','companyAddressSoi');
			$table->renameColumn('companyAdressRoad','companyAddressRoad');
			$table->renameColumn('companyAdressSubDistrict','companyAddressSubDistrict');
			$table->renameColumn('companyAdressDistrict','companyAddressDistrict');
			$table->renameColumn('companyAdressProvince','companyAddressProvince');
			$table->renameColumn('companyAdressPostalCode','companyAddressPostalCode');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('pp2',function($table)	{
			$table->renameColumn('companyAddressNo','companyAdressNo');
			$table->renameColumn('companyAddressMoo','companyAdressMoo');
			$table->renameColumn('companyAddressSoi','companyAdressSoi');
			$table->renameColumn('companyAddressRoad','companyAdressRoad');
			$table->renameColumn('companyAddressSubDistrict','companyAdressSubDistrict');
			$table->renameColumn('companyAddressDistrict','companyAdressDistrict');
			$table->renameColumn('companyAddressProvince','companyAdressProvince');
			$table->renameColumn('companyAddressPostalCode','companyAdressPostalCode');
		});
	
	}

}
