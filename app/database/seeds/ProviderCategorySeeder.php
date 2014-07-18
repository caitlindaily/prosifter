<?php

class ProviderCategorySeeder extends Seeder {

    public function run()
    {
        DB::table('provider_category')->delete();

        for ($i = 1; $i < 10; $i++) {
        	DB::table('provider_category')->insert(
    			array('provider_id' => $i, 'category_id' => rand(1,10))
	    	);
        }

    }

}