<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_cliente', function($table)
		{
			$table->increments('id');					
			//$table->integer('t_tipo_cliente_id')->unsigned();
			//$table->foreign('t_tipo_cliente_id')->references('id')->on('t_tipo_usuario');
			$table->integer('t_persona_id')->unsigned();
			$table->foreign('t_persona_id')->references('id')->on('t_persona');
			$table->integer('CliEstado');
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
		Schema::drop('t_cliente');
	}

}
