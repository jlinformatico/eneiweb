<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_grupo', function($table)
		{
			$table->increments('id');					
			$table->string('PK_Grupo',50)->unique();
			$table->integer('t_modulo_id')->unsigned();
			$table->foreign('t_modulo_id')->references('id')->on('t_modulo');
			$table->integer('Correlativo');
			$table->integer('GruEstado');
			$table->string('GruObservaciones',100);
			$table->date('GruFechaInicio');
			$table->date('GruFechaFinal');
			$table->float('GruCostoModulo');
			$table->string('GruFrecuencia',255);
			$table->time('GruHoraInicial');
			$table->time('GruHoraFinal');
			$table->integer('GruHorasAcademicas');
			$table->string('GruSA',8);
			$table->integer('GruVeriInicio');
			$table->integer('GruVerificacion');
			$table->integer('GruNotas');
			
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
						
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
		Schema::drop('t_grupo');
	}

}
