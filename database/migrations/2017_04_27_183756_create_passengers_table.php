<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePassengersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passengers', function(Blueprint $table)
		{
			$table->increments('pass_id');
			$table->string('fname', 60);
			$table->string('lname', 60);
			$table->string('billaddr', 60);
			$table->string('pass_email', 60);
			$table->string('Payment', 60);
			$table->integer('points');
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
		Schema::drop('passengers');
	}

}
