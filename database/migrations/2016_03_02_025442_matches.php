<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('matches', function(Blueprint $matches_table) {
        $matches_table->increments('id');
        $matches_table->tinyInteger('radiant_win');
        $matches_table->smallInteger('duration');
        $matches_table->timestamp('start_time');
        $matches_table->tinyInteger('game_mode');
        $matches_table->smallInteger('cluster');
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
