<?php

class UserSeederTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            [
                "username" => "admin",
                "password" => Hash::make('admin'),
                "email"    => "pawis.joe@gmail.com",
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
