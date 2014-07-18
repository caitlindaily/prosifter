<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		   Schema::create('ratings', function($table)
        {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('post_id')->unsigned();
            $table->tinyInteger('rating')->unsigned();
            $table->timestamps();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	
	public function down()
	{
		Schema::drop('ratings');
	}

}
