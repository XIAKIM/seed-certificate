<?php

class UserSeederTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            [
                "username" => "admin",
                "password" => Hash::make('admin'),
                "role"     => "officer",
                "active"   => 1,
                "descriptionID" => 1
            ]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
	}

}
