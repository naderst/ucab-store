<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function($tabla) {
			$tabla->increments('id');
			$tabla->unsignedInteger('zapato_id');
			$tabla->string('usuario');
			$tabla->text('comentario');
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
		Schema::drop('comentarios');
	}

}
