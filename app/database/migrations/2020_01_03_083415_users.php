<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

    public function up()
    {
        Schema::create('users', function($table){
            $table->increments('id');//id int(10)
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('confirmed');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role');

        });
    }

    public function down()
    {
        Schema::drop('users');
    }

}