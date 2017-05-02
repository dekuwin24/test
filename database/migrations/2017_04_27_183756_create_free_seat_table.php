<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreeSeatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('free_seat', function(Blueprint $table)
		{
			$table->integer('fs_train_id');
			$table->integer('fs_seg_id');
			$table->date('fs_date');
			$table->integer('fs_freeseat');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('free_seat');
	}

}
