<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('transaction_no', 30)->unique();
            $table->string('no_id', 30)->unique();
            $table->integer('card_id');
            $table->integer('payment_id');
            $table->double('total');
            $table->double('discount');
            $table->string('transaction_desc', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
