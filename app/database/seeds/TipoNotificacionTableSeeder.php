<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class TipoNotificacionTableSeeder extends Seeder {
    public function run(){

		$TipoNotificacion = array(
			array('TnotNombre'=>'Por Correo'), // 1
			array('TnotNombre'=>'Por Llamada'),// 2
			array('TnotNombre'=>'Por Mensaje de Texto'),
			array('TnotNombre'=>'Por Facebook'),
		);

		DB::table('t_tipo_notificacion')->insert($TipoNotificacion);

    }
}

