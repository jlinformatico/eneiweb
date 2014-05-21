<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */

class TipoUsuarioTableSeeder extends Seeder {
    public function run(){
    	    
		$TipoUsuario = array(
			array('TipoUsuNombre'=>'Administrador'), // 1
			array('TipoUsuNombre'=>'Coordinador'),// 2
			array('TipoUsuNombre'=>'Practicante'),// 3
			array('TipoUsuNombre'=>'Docente'),// 4
		);

		DB::table('t_tipo_usuario')->insert($TipoUsuario);
    }
}
