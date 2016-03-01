<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $teams_table) {
          $teams_table->increments('team_id');
          $teams_table->string('name');
          $teams_table->string('tag'); //abbreviation

          $teams_table->string('logo');// http://dev.dota2.com/showthread.php?t=71363&p=462059&viewfull=1#post462059)

          $teams_table->string('country_code');// http://en.wikipedia.org/wiki/ISO_3166-1#Current_codes

          $teams_table->string('team_url');
          
          $teams_table->integer('player_0_account_id');
          $teams_table->integer('player_1_account_id');
          $teams_table->integer('player_2_account_id');
          $teams_table->integer('player_3_account_id');
          $teams_table->integer('player_4_account_id');
          $teams_table->integer('player_5_account_id');
          $teams_table->integer('player_6_account_id');
        })
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
