<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZapatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zapatos', function($tabla) {
			$tabla->increments('id');
			$tabla->string('foto');
			$tabla->string('descripcion');
			$tabla->string('modelo');
			$tabla->string('color');
			$tabla->decimal('precio', 7, 2);
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zapatos');
	}

}
