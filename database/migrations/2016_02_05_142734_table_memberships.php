<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function(Blueprint $table){
            $table->increments('id');
            $table->string('membership_no', 30)->unique();
            $table->string('card_id', 30);
            $table->string('no_id', 30)->unique();
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->integer('gender');
            $table->date('date_of_birth');
            $table->text('address');
            $table->string('email', 100)->unique();
            $table->string('employee', 100);
            $table->string('h_phone', 30);
            $table->string('m_phone', 30);
            $table->string('off_phone', 30);
            $table->string('fax', 30);
            $table->string('source', 30);
            $table->date('start_date');
            $table->date('exp_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('memberships');
    }
}
