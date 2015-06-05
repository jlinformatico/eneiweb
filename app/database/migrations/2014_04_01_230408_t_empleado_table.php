<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TEmpleadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_persona',function($table)
		{
			$table->increments('id');
			$table->string('PK_Persona')->unique();// DNI identificador unico
			$table->string('password'); // contraseña
			$table->string('PeNombre',50);
			$table->string('PeApellidoPaterno',50);
			$table->string('PeApellidoMaterno',50);
			$table->string('PeSexo',2);
			$table->string('PeDireccion',60);
			$table->string('PeCelular',12);
			$table->string('PeTel',12);
			$table->integer('PeEstado');
			$table->string('PeEmail',50);
			$table->date('PeFechaNac',12);// ejemplo 14/03/2010
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
		Schema::drop('t_empleado');
	}

}
