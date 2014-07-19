<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema:: create('messages',function($table){
                   $table->increments('sno');
                   $table->string('name');
                   $table->string('email');
                   $table->string('subject');
                   $table->text('message');
                   $table->timestamp('datetime');
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
