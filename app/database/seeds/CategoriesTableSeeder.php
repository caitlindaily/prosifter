<?php

class CategoriesTableSeeder extends Seeder {

    public function run() {

            DB::table('categories')->delete();

            for ($i = 0; $i < 8; $i++) {

                $categories = new Category();

                $stuff = [
		    		'Beauty',
		    		'Health',
		    		'Home & Garden',
		    		'Auto',
		    		'Pets',
		    		'Events',
		    		'Recreation',
		    		'Computer & Tech'
		    	];

                $categories->name = $stuff[$i];
	            $categories->save();

            }

    }
}