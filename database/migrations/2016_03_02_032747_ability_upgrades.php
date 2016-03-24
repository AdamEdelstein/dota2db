<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AbilityUpgrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ability_upgrades', function(Blueprint $ability_upgrades_table) {
        $ability_upgrades_table->mediumInteger('slot_id');
        $ability_upgrades_table->smallInteger('ability');
        $ability_upgrades_table->smallInteger('time');
        $ability_upgrades_table->tinyInteger('level');
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
