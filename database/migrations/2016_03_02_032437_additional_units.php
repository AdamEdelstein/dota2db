<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('additional_units', function(Blueprint $additional_units_table) {
        $additional_units_table->integer('slot_id');
        $additional_units_table->string('unitname');
        $additional_units_table->smallInteger('item_0');
        $additional_units_table->smallInteger('item_1');
        $additional_units_table->smallInteger('item_2');
        $additional_units_table->smallInteger('item_3');
        $additional_units_table->smallInteger('item_4');
        $additional_units_table->smallInteger('item_5');
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
