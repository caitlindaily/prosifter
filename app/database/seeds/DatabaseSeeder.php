<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UsersTableSeeder');
        $this->call('ProvidersTableSeeder');
    }
}
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        for ($i = 1; $i < 10; $i++) {

	        $user = new User();

	        $user->first_name = "Greg";
	        $user->last_name = "McCabe";
	        $user->email = "greg{$i}@codeup.com";
	        $user->password = Hash::make("letmein");
	        $user->role = "admin";

	        $user->save();
        }


    }

}

class ProvidersTableSeeder extends Seeder {

    public function run() {

        DB::table('providers')->delete();
        $user = User::first();

        for ($i = 1; $i < 10; $i++) {

            $provider = new Provider();

            $provider->company_name = "prosifter";
            $provider->location = "San Antonio";
            $provider->admin_user_id = $user->id;
            $provider->slug = $provider->company_name . "-$i";

            $provider->save();
        }
    }
}
// class PostTableSeeder extends Seeder {

//     public function run()
//     {
//         DB::table('posts')->delete();

//         for ($i = 1; $i <= 10; $i++)
//         {

//         $post = new Post();
//         $post->user_id = 1;
//         $post->title = "Post Title $i";
//         $post->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra sapien vel turpis sagittis condimentum congue tempor purus. Fusce vitae nibh eget neque scelerisque mollis. Donec aliquet pellentesque arcu, id porttitor lorem feugiat quis. Sed tempor turpis id erat vehicula sagittis. Ut sit amet sollicitudin lorem. Maecenas consequat sollicitudin risus, vitae convallis enim tincidunt et. Nulla non laoreet dolor, vel ornare leo. Nam accumsan at sem eget ultrices. Maecenas tristique urna augue, vitae sagittis erat volutpat eget. Aenean luctus leo vitae est fringilla ornare vitae ac est.";
//         $post->provider_id = "";
//         $post->slug = $post->title;
//         $post->save();


//         // $table->increments('id');
//         //     $table->integer('provider_id')->unsigned();
//         //     $table->integer('user_id')->unsigned();
//         //     $table->string('title', 100);
//         //     $table->text('body');
//         //     $table->foreign('user_id')->references('id')->on('users');
//         //     $table->foreign('provider_id')->references('id')->on('providers');
//         //     $table->timestamps();
//         }
//     }
