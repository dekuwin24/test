<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip', function(Blueprint $table)
		{
			$table->integer('trip_id');
			$table->integer('train_id');
			$table->integer('pass_id');
			$table->integer('trip_start');
			$table->integer('trip_end');
			$table->date('trip_dateto');
			$table->date('trip_dateback')->nullable();
			$table->integer('methode_payment');
			$table->integer('trip_fare');
			$table->integer('trip_seg_start');
			$table->integer('trip_seg_end');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip');
	}

}
