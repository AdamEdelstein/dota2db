<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('slots', function(Blueprint $slots_table) {

        // This is all the table data for individual
        // player slots in a match
        $slots_table->increments('id');
        $slots_table->integer('match_id');
        $slots_table->integer('account_id');
        $slots_table->integer('hero_id');
        $slots_table->integer('player_slot');
        $slots_table->integer('item_0');
        $slots_table->integer('item_1');
        $slots_table->integer('item_2');
        $slots_table->integer('item_3');
        $slots_table->integer('item_4');
        $slots_table->integer('item_5');
        $slots_table->integer('kills');
        $slots_table->integer('deaths');
        $slots_table->integer('assists');
        $slots_table->integer('last_hits');
        $slots_table->integer('denies');
        $slots_table->integer('gold_per_min');
        $slots_table->integer('xp_per_min');
        $slots_table->integer('hero_damage');
        $slots_table->integer('tower_damage');
        $slots_table->integer('hero_healing');
        $slots_table->integer('level');
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
