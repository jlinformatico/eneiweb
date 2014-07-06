<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TDisponibilidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_disponibilidad',function($table)
		{
			$table->increments('id');
			$table->string('DispNombre');//frecuencia y horario
			$table->string('DispFrecuencia');//Lun-Mie-Vie, Mar-Jue, Sab, Dom
			$table->string('DispTurno');//mañana, tarde, noche
			$table->string('DispHorario');//09:00-10:40, 08:00 - 13:00
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
		Schema::drop('t_disponibilidad');
	}

}
