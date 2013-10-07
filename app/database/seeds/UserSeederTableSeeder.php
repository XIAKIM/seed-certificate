<?php

class UserSeederTableSeeder extends Seeder {

	public function run()
	{
        $descriptions = [
            [
                "name" => "test",
                "lastName" => "test",
                "age" => "20",
                "email" => "pawis.joe@gmail.com",
                "nationality" => "test",
                "identificationType" => "test",
                "identificationNumber" => "test",
                "issuedDistrict" => "test",
                "issuedProvince" => "test",
                "address" => "test",
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
