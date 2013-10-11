<?php

class UserSeederTableSeeder extends Seeder {

	public function run()
	{
        $descriptions = [
            [
                "name" => "Name",
                "lastName" => "Lastname",
                "age" => "20",
                "email" => "pawisjoe@gmail.com",
                "nationality" => "test",
                "identificationType" => "test",
                "identificationNumber" => "test",
                "issuedDistrict" => "test",
                "issuedProvince" => "test",

                "userAddressNo" => "test",
                "userAddressMoo" => "test",
                "userAddressSoi" => "test",
                "userAddressRoad" => "test",
                "userAddressSubDistrict" => "test",
                "userAddressDistrict" => "test",
                "userAddressProvince" => "test",
                "userAddressPostalCode" => "test",

                "telNumber" => "023456789",
                "status" => 1
            ]
        ];
        foreach ($descriptions as $description)
        {
            Description::create($description);
        }

		$users = [
            [
                "username" => "admin",
                "password" => Hash::make('admin'),
                "email" => "pawisjoe@gmail.com",
                "role"     => "officer",
                "descriptionID" => 1
            ]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
	}

}
