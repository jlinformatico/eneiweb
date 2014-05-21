<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_curso',function($table)
		{
			$table->increments('id');
			$table->string('PK_Curso',11)->unique();
			$table->string('CurNombre',50);
			$table->integer('CurDuracion');
			$table->integer('t_modulo_id')->unsigned();
			$table->foreign('t_modulo_id')->references('id')->on('t_modulo');
			$table->integer('CurOrden');
			$table->float('CurPrecio');
			$table->float('CurPagoXHora');
			$table->integer('CurEstado');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('t_curso');
	}

}
