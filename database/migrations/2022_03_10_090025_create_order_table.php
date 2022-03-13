<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('order', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->double('copone');
			$table->string('vodaphoe_cash');
		});
	}

	public function down()
	{
		Schema::drop('order');
	}
}