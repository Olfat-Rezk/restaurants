<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuTable extends Migration {

	public function up()
	{
		Schema::create('menu', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('photo');
			$table->integer('mealable_id')->unsigned();
			$table->string('name');
			$table->double('price');
			$table->string('category');
		});
	}

	public function down()
	{
		Schema::drop('menu');
	}
}
