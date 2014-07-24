<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $faker = Faker\Factory::create();

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

        $path = [
            'greg',
            'caitlin',
            'mike',
            'cole',
            'jon',
            'andrew',
            'lindsey',
            'jason',
            'gregory',
            'danny'
        ];

        for ($i = 0; $i < 10; $i++) {

	        $user = new User();

	        $user->first_name = $first[$i];
	        $user->last_name = $last[$i];
	        $user->email = (strtolower($first[$i])) . "@codeup.com";
	        $user->password = "letmein";
	        $user->role = "admin";
            $user->img_path = "/img/users/" . $path[$i] . '.jpg';
	        $user->save();
        }


    }

}