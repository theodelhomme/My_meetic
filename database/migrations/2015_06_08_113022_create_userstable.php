<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserstable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->timestamps();
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('name');
			$table->string('lastname');
			$table->date('birthdate');
			$table->string('gender');
			$table->string('city');
			$table->string('departement');
			$table->string('region');
			$table->string('country');
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->boolean('confirmed');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
