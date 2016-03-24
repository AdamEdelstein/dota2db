<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*
      Schema::create('users', function(Blueprint $users_table) {
        $users_table->increments('id');
        $users_table->string('personaname');
        $users_table->string('steamid');
        $users_table->string('avatar');
        $users_table->string('profileurl');
        $users_table->tinyInteger('is_personaname_real');
      });
      */
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
