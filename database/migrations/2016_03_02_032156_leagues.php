<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Leagues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('leagues', function(Blueprint $leagues_table) {
        $leagues_table->increments('id');
        $leagues_table->string('name');
        $leagues_table->string('description');
        $leagues_table->string('tournament_url');
        $leagues_table->integer('itemdef');
        $leagues_table->tinyInteger('is_finished');
      });
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
