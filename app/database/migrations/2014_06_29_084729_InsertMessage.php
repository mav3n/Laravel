<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertMessage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('messages')->insert(array(
                   "name"=>"Ajay",
                   "email"=>"ajay@gmail.com",
                   "subject"=>"XYZ",
                    "message"=>"XYZ",
                    "datetime"=>  date('Y-m-d H:m:s')
                ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('messages')->where('email','=','ajay@gmail.com')->delete();
	}

}
