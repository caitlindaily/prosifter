<?php

class PostTableSeeder extends Seeder {

    public function run() {

            DB::table('posts')->delete();
            $user = User::first();
            $provider = Provider::first();

            for ($i = 1; $i <= 150; $i++) {

                $post = new Post();

                $post->user_id = rand(1,10);
                $post->title = "Review Title $i";
                $post->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra sapien vel turpis sagittis condimentum congue tempor purus. Fusce vitae nibh eget neque scelerisque mollis. Donec aliquet pellentesque arcu, id porttitor lorem feugiat quis. Sed tempor turpis id erat vehicula sagittis. Ut sit amet sollicitudin lorem. Maecenas consequat sollicitudin risus, vitae convallis enim tincidunt et. Nulla non laoreet dolor, vel ornare leo. Nam accumsan at sem eget ultrices. Maecenas tristique urna augue, vitae sagittis erat volutpat eget. Aenean luctus leo vitae est fringilla ornare vitae ac est.";
                $post->provider_id = rand(1,50);
                $post->save();
        }
    }
}