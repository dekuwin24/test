<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStopAtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stop_at', function(Blueprint $table)
		{
			$table->integer('train_id');
			$table->integer('station_id');
			$table->time('time_in');
			$table->time('time_out');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stop_at');
	}

}
