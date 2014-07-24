<?php

class PostTableSeeder extends Seeder {

    public function run() {

            DB::table('posts')->delete();

            $faker = Faker\Factory::create();

            $user = User::first();
            $provider = Provider::first();

            for ($i = 1; $i <= 250; $i++) {

                $post = new Post();

                $post->user_id = rand(1,10);
                $post->title = $faker->text($maxNbChars = 30);
                $post->body = $faker->text($maxNbChars = 150);
                $post->provider_id = rand(1,50);
                $post->save();
        }
    }
}