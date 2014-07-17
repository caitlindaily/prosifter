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

		$this->call('UsersTableSeeder');
        $this->call('ProvidersTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('CategoriesTableSeeder');
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

class PostTableSeeder extends Seeder {

    public function run() {

            DB::table('posts')->delete();
            $user = User::first();
            $provider = Provider::first();

            for ($i = 1; $i <= 10; $i++) {

                $post = new Post();

                $post->user_id = $user->id;
                $post->title = "Post Title $i";
                $post->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra sapien vel turpis sagittis condimentum congue tempor purus. Fusce vitae nibh eget neque scelerisque mollis. Donec aliquet pellentesque arcu, id porttitor lorem feugiat quis. Sed tempor turpis id erat vehicula sagittis. Ut sit amet sollicitudin lorem. Maecenas consequat sollicitudin risus, vitae convallis enim tincidunt et. Nulla non laoreet dolor, vel ornare leo. Nam accumsan at sem eget ultrices. Maecenas tristique urna augue, vitae sagittis erat volutpat eget. Aenean luctus leo vitae est fringilla ornare vitae ac est.";
                $post->provider_id = $provider->id;
                $post->save();
        }
    }
}

class CategoriesTableSeeder extends Seeder {

    public function run() {

            DB::table('categories')->delete();

            for ($i = 1; $i < 10; $i++) {

                $categories = new Category();

                $categories->name = "web developer $i";
                $categories->save();

            }

    }
}



