<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//categorias
		Schema::create('t_categoria',function($table){
			$table->engine = 'InnoDB';
	        $table->increments('id');
	        $table->string('CatNombre',100);
			$table->string('CatDescripcion',100);
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
		Schema::drop('t_categoria');
	}

}
