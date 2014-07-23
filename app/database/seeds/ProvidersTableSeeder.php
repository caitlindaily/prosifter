<?php

class ProvidersTableSeeder extends Seeder {

    public function run() {

        DB::table('providers')->delete();
        $user = User::first();

        for ($i = 1; $i <= 50; $i++) {

            $provider = new Provider();

            $provider->company_name = 'Company Name ' . $i;
            $provider->address = $i . '23 street';
            $provider->city = 'San Antonio';
            $provider->state = 'TX';
            $provider->zip_code = '7820' . $i;
            $provider->location = '';
            $provider->phone = '(210) 555-555' . $i;
            $provider->website = 'www.' . $i . ".com";
            $provider->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            $provider->admin_user_id = rand(1,3);
            $provider->slug = $provider->company_name . "-$i";

            $provider->save();
        }
    }
}