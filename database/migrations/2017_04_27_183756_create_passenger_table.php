<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePassengerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passenger', function(Blueprint $table)
		{
			$table->integer('pass_id');
			$table->string('pass_fname', 60);
			$table->string('pass_lname', 60);
			$table->string('pass_billaddr', 60);
			$table->string('pass_email', 60);
			$table->string('Payment', 60);
			$table->integer('pass_points');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('passenger');
	}

}
