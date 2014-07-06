<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPerfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('t_perfil',function($table)
		{
			$table->increments('id');
			$table->string('PerNombre');//Alto, Intermedio, Bajo
			$table->string('PerDescripcion');//Estudiante, Profesional, Corporativo
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
		Schema::drop('t_perfil');
	}

}
