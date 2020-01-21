<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Role extends Migration {

    public function up()
    {
        Schema::create ('role', function($table){
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->smallInteger('active');
        });
    }

    public function down()
    {
        Schema::drop('role');
    }

}