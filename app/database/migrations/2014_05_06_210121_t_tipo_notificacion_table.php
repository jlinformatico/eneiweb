<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TTipoNotificacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_tipo_notificacion',function($table)
		{
			$table->increments('id');
			$table->string('TnotNombre');//porCorreo,llamada,msm,facebook
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
		Schema::drop('t_tipo_notificacion');
	}

}
