<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSplashScreenTable extends Migration {

	public function up()
	{
		Schema::create('splash_screen', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone');
		});
	}

	public function down()
	{
		Schema::drop('splash_screen');
	}
}