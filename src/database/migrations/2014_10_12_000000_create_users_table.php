<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->nullable();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->datetime('last_login')->nullable();
			$table->boolean('locked')->default(FALSE);

			$table->boolean('expired')->default(FALSE);
			$table->datetime('expired_at')->nullable();
			$table->string('confirmation_token',128)->nullable();
			$table->datetime('password_request_at')->nullable();
			$table->boolean('verified')->default(TRUE);
			$table->datetime('verified_at')->nullable();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
