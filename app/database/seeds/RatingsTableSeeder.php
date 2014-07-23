<?php

class RatingsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ratings')->delete();


        for ($i = 0; $i < 100; $i++) {

	        $rating = new Rating();

	        $rating->provider_id = rand(1,50);
	        $rating->user_id = rand(1,10);
	        $rating->post_id = $i;
	        $rating->rating = rand(1,5);

	        $rating->save();
        }


    }

}