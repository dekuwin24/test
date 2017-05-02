<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trains', function(Blueprint $table)
		{
			$table->integer('train_id');
			$table->integer('train_starts');
			$table->integer('train_ends');
			$table->boolean('train_direction');
			$table->char('train_days', 3);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trains');
	}

}
