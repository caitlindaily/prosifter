<?php

class ProvidersTableSeeder extends Seeder {

    public function run() {

        DB::table('providers')->delete();
        $user = User::first();

        for ($i = 1; $i < 10; $i++) {

            $provider = new Provider();

            $provider->company_name = "Prosifter";
            $provider->location = "San Antonio";
            $provider->admin_user_id = $user->id;
            $provider->slug = $provider->company_name . "-$i";

            $provider->save();
        }
    }
}