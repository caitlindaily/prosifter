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
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->string('role');
            $table->timestamps();

        });

        Schema::create('categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });

        Schema::create('providers', function($table)
        {
            $table->increments('id');
            $table->string('company_name');
            $table->integer('admin_user_id')->unsigned();
            $table->string('location');
            $table->string('slug');
            $table->foreign('admin_user_id')->references('id')->on('users');
            $table->timestamps();
        });


        Schema::create('provider_category', function($table)
        {
            $table->integer('provider_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->primary(array('provider_id', 'category_id'));

        });

        Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title', 100);
            $table->text('body');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('provider_id')->references('id')->on('providers');
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
		Schema::drop('posts');
        schema::drop('provider_category');
        Schema::drop('providers');
        schema::drop('categories');
		Schema::drop('users');
	}

}
