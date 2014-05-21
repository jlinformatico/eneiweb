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
			$table->string('PK_Cliente')->unique(); //DNI
			//$table->integer('t_tipo_usuario_id')->unsigned();
			//$table->foreign('t_tipo_usuario_id')->references('id')->on('t_tipo_usuario');
			$table->string('password');
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
