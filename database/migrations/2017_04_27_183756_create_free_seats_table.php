<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeSeatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('free_seats', function(Blueprint $table)
		{
			$table->integer('fs_train_id')->unsigned();
			$table->integer('fs_seg_id')->unsigned();
			$table->date('fs_date');
			$table->integer('fs_freeseat');
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
		Schema::drop('free_seats');
	}

}
