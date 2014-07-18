<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        for ($i = 1; $i < 10; $i++) {

	        $user = new User();

	        $user->first_name = "Greg";
	        $user->last_name = "McCabe";
	        $user->email = "greg{$i}@codeup.com";
	        $user->password = Hash::make("letmein");
	        $user->role = "admin";

	        $user->save();
        }


    }

}