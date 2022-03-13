<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('menu', function(Blueprint $table) {
			$table->foreign('mealable_id')->references('id')->on('mealables')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('favorites', function(Blueprint $table) {
			$table->foreign('menu_id')->references('id')->on('menu')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('favorites', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('menu', function(Blueprint $table) {
			$table->dropForeign('menu_mealable_id_foreign');
		});
		Schema::table('favorites', function(Blueprint $table) {
			$table->dropForeign('favorites_menu_id_foreign');
		});
		Schema::table('favorites', function(Blueprint $table) {
			$table->dropForeign('favorites_client_id_foreign');
		});
	}
}