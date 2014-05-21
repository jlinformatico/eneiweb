<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TDetalleVisitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_detalle_visita',function($table)
		{
			$table->increments('id');
			$table->integer('t_visita_id')->unsigned();
			$table->foreign('t_visita_id')->references('id')->on('t_visita');
			$table->integer('t_movimiento_id')->unsigned();
			$table->foreign('t_movimiento_id')->references('id')->on('t_movimiento');
			$table->integer('t_modulo_id')->unsigned();
			$table->foreign('t_modulo_id')->references('id')->on('t_modulo');
			$table->string('DetviDisponibilidad');//frecuencia y horario
			$table->string('DetviPerfil');//Muy interesado, Interesado, Poco interesado
			$table->integer('CurDetalle');//confirmado, cancelado
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
		Schema::drop('t_detalle_visita');
	}

}
