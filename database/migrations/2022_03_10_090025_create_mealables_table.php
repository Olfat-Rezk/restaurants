<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealablesTable extends Migration {

	public function up()
	{
		Schema::create('mealables', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('photo');
			$table->text('disc');
			$table->enum('size', array('small','medium','large'));
			$table->double('price');
			$table->string('name');
			$table->integer('category');
		});
	}

	public function down()
	{
		Schema::drop('mealables');
	}
}
