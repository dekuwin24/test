<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassTablecCreate=passenger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('passengers', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('billaddr');
            $table->string('pass_email');
            $table->string('Payment');
            $table->integer('points');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
