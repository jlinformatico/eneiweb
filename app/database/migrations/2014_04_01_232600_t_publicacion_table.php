<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPublicacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//tabla publicaciones
		Schema::create('t_publicacion',function($table){
			$table->engine = 'InnoDB';
	        $table->increments('id');
			$table->integer('t_usuario_id')->unsigned(); //cuando es string no va unsigned
			$table->foreign('t_usuario_id')->references('id')->on('t_usuario');
			$table->integer('t_categoria_id')->unsigned();
			$table->foreign('t_categoria_id')->references('id')->on('t_categoria');
	        $table->string('PubTitulo',150);
			$table->string('PubUrl',150);
			$table->text('PubContenido');
			$table->integer('PubEstado');
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
		Schema::drop('t_publicacion');
	}

}
