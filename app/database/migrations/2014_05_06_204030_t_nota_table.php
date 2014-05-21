<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_nota',function($table)
		{
			$table->increments('id');
			$table->integer('t_programacion_id')->unsigned();
			$table->foreign('t_programacion_id')->references('id')->on('t_programacion');
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
			$table->integer('t_cliente_id')->unsigned();
			$table->foreign('t_cliente_id')->references('id')->on('t_cliente');
			$table->float('NotaPromedio');
			//$table->integer('NotaPromedio');
			
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
		Schema::drop('t_nota');
	}

}
