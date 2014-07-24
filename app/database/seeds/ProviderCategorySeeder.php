<?php

class ProviderCategorySeeder extends Seeder {

    public function run()
    {
        DB::table('provider_category')->delete();

        // this generates providers 1-10 for category 1
        for ($i = 1; $i <= 10; $i++) {
        	DB::table('provider_category')->insert(
    			array('provider_id' => $i, 'category_id' => rand(1,1))
	    	);
        }

        // this generates random providers for categories 2-8
        for ($i = 11; $i <= 50; $i++) {
        	DB::table('provider_category')->insert(
    			array('provider_id' => $i, 'category_id' => rand(2,8))
	    	);
        }

    }

}