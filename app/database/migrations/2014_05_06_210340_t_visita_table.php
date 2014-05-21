<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TVisitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_visita',function($table)
		{
			$table->increments('id');
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
			$table->integer('t_cliente_id')->unsigned();
			$table->foreign('t_cliente_id')->references('id')->on('t_cliente');
			$table->integer('t_tipo_visita_id')->unsigned();
			$table->foreign('t_tipo_visita_id')->references('id')->on('t_tipo_visita');
			//$table->time('CurOrden');			
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
		Schema::drop('t_visita');
	}

}
