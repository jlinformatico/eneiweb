<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TMatriculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_matricula', function($table)
		{
			$table->increments('id');
			$table->string('PK_Matricula')->unique(); //compuesto por PK_Grupo-PK_Alumno					
			$table->integer('t_grupo_id')->unsigned(); 
			$table->foreign('t_grupo_id')->references('id')->on('t_grupo');
			$table->integer('t_cliente_id')->unsigned();
			$table->foreign('t_cliente_id')->references('id')->on('t_cliente');
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario'); //muy pronto cambiará a t_persona XD

			/*$table->integer('Correlativo');
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
			
			$table->integer('FK_Empleado')->unsigned();
			$table->foreign('FK_Empleado')->references('id')->on('t_usuario');
				*/		
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
		Schema::drop('t_matricula');
	}

}
