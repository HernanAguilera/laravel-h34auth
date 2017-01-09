<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->index();
			$table->string('first_name', 128)->nullable();
			$table->string('last_name', 128)->nullable();
			// $table->integer('ciudad_id')->unsigned()->index()->nullable();
			$table->string('web', 128)->nullable();
			$table->string('avatar')->nullable();

			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ;

			// $table->foreign('ciudad_id')
			// 	  ->references('id')
			// 	  ->on('ciudades')
			// 	  ;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
