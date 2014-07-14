<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('user_name', 50);
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->string('role');
            $table->timestamps();

        });

        Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('body');
            $table->integer('user_id');
            $table->integer('provider_id');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('providers', function($table)
        {
            $table->increments('id');
            $table->string('category');
            $table->string('company_name');
            $table->string('location');
            $table->integer('user_id');
            $table->string('slug');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('providers');
		Schema::drop('posts');
		Schema::drop('users');
	}

}
