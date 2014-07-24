<?php

class ProvidersTableSeeder extends Seeder {

    public function run() {

        DB::table('providers')->delete();
        
        $faker = Faker\Factory::create();

        $company = [
            'J Anthony Makeup Artist',
            'Jaquelyn Crim Makeup',
            'Rob the Original',
            'Phenix Salon',
            'Lavender Skin Spa',
            'Fiesta Nails',
            '5th Ave Nails',
            'Bella Hair Design',
            'Salon-Del-Carlo',
            'Skin Care Center'
        ];

        $path = [
            'J-Anthony',
            'Jaquelyn-Crim',
            'Rob-the-Original',
            'Phenix-Salon',
            'Lavender-Skin-Spa',
            'Fiesta-Nails',
            '5th-Ave-Nail',
            'Bella-Hair-Designs',
            'Salon-Del-Carlo',
            'Skin-Care'
        ];

        // This creates the first 10 providers
        for ($i = 0; $i < 10; $i++) {

            $provider = new Provider();

            $provider->company_name = $company[$i];
            $provider->address = $faker->streetAddress;
            $provider->city = $faker->city;
            $provider->state = $faker->state;
            $provider->zip_code = $faker->postcode;
            $provider->phone = '(210) 555-555' . $i;
            $provider->website = 'www.' . $i . ".com";
            $provider->img_path = "/img/providers/" . $path[$i] . '.jpg';
            $provider->description = $faker->text($maxNbChars = 400);
            $provider->admin_user_id = rand(1,10);
            $provider->slug = $provider->company_name . "-$i";

            $provider->save();
        }

        // This creates providers 10-50
        for ($i = 11; $i <= 50; $i++) {

            $provider = new Provider();

            $provider->company_name = 'Company Name ' . $i;
            $provider->address = $faker->streetAddress;
            $provider->city = $faker->city;
            $provider->state = $faker->state;
            $provider->zip_code = $faker->postcode;
            $provider->phone = '(210) 555-555' . $i;
            $provider->website = 'www.' . $i . ".com";
            $provider->img_path = '/img/blog/blog-image-1.jpg';
            $provider->description = $faker->text($maxNbChars = 400);
            $provider->admin_user_id = rand(1,10);
            $provider->slug = $provider->company_name . "-$i";

            $provider->save();
        }
    }
}