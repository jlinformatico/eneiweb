<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TModuloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_modulo', function($table)
		{
			$table->increments('id');					
			$table->string('ModNombre',50)->unique();//
			$table->string('ModDescripcion');
			$table->integer('ModDuracion');
			$table->float('ModPrecio');
			$table->integer('ModEstado');
			$table->string('ModCertificado',50);

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
		Schema::drop('t_modulo');
	}

}
