<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tallas', function($tabla) {
			$tabla->increments('id');
			$tabla->unsignedInteger('zapato_id');
			$tabla->decimal('talla', 2, 1);
			$tabla->timestamps();

			$tabla->foreign('zapato_id')->references('id')->on('zapatos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tallas');
	}

}
