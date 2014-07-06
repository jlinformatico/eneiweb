<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TNotificacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_notificacion',function($table)
		{
			$table->increments('id');
			$table->integer('t_usuario_id')->unsigned();
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
			$table->integer('t_detalle_visita_id')->unsigned();
			$table->foreign('t_detalle_visita_id')->references('id')->on('t_detalle_visita');
			$table->integer('t_tipo_notificacion_id')->unsigned();
			$table->foreign('t_tipo_notificacion_id')->references('id')->on('t_tipo_notificacion');
			$table->string('NotEstado');//no contesto, contesto, confirmo, cancelo
			$table->string('NotObservacion');//se llamo varias veces
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
		Schema::drop('t_notificacion');
	}

}
