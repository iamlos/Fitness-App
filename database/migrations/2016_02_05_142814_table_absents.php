<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAbsents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absents', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('no_id', 30);
            $table->integer('locker_id');
            $table->time('c_in');
            $table->time('c_out');
            $table->integer('h_towel');
            $table->integer('b_towel');
            $table->dateTime('absent_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('absents');
    }
}
