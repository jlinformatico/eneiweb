<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TProgramacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_programacion',function($table)
		{
			$table->increments('id');
			$table->integer('t_grupo_id')->unsigned();
			$table->foreign('t_grupo_id')->references('id')->on('t_grupo');
			$table->integer('t_curso_id')->unsigned();
			$table->foreign('t_curso_id')->references('id')->on('t_curso');
			$table->date('ProInicio');
			$table->date('ProTermino');
			
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
			
			$table->integer('t_cliente_id')->unsigned();
			$table->foreign('t_cliente_id')->references('id')->on('t_cliente');
			
			$table->integer('ProEstado');
			$table->integer('ProVerificacion');
						
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
		Schema::drop('t_programacion');
	}

}
