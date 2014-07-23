<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $first = [
        	'Greg',
        	'Caitlin',
        	'Mike',
        	'Cole',
        	'Jon',
        	'Andrew',
        	'Lindsey',
        	'Jason',
        	'Gregory',
        	'Danny'
        ];

        $last = [
        	'McCabe',
        	'Daily',
        	'Jaime',
        	'Reveal',
        	'Robinson',
        	'Samaniego',
        	'Neubauer',
        	'Loehman',
        	'Vallejo',
        	'Alexander'
        ];

        for ($i = 0; $i < 10; $i++) {

	        $user = new User();

	        $user->first_name = $first[$i];
	        $user->last_name = $last[$i];
	        $user->email = (strtolower($first[$i])) . "@codeup.com";
	        $user->password = "letmein";
	        $user->role = "admin";

	        $user->save();
        }


    }

}