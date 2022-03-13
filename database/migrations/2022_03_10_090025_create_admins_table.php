<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('phone');
//			$table->decimal('latitude', 10.8);
//			$table->decimal('longitude', 10.8);
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
