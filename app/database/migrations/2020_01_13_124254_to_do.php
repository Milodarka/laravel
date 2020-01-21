<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToDo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
        Schema::create('to_do', function($table){
            $table->increments('id');//id int(10)
            $table->string('task_name');
            $table->date('today');
            $table->date('task_expire');
			$table->text('description');
			$table->boolean('done');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('to_do');
	}

}
