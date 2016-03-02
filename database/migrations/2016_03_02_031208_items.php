<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('items', function(Blueprint $items_table) {
        $items_table->increments('id');
        $items_table->string('name');
        $items_table->smallInteger('cost');
        $items_table->tinyInteger('secret_shop');
        $items_table->tinyInteger('side_shop');
        $items_table->tinyInteger('recipe');
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
