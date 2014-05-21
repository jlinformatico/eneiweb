<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class DetalleVisitaTableSeeder extends Seeder {
    public function run(){

       DetalleVisita::create(array(
			't_visita_id'  => 1,//visita
			't_movimiento_id'  => 1,//preinscripcion
            't_modulo_id' => 1,//modulo ofimatica
			'DetviDisponibilidad' => 'LUN-MIE-VIE, Tardes',//frecuencia horario
			'DetviPerfil' => 'Muy interesado', //Perfil
        ));
       DetalleVisita::create(array(
			't_visita_id'  => 2,//visita
			't_movimiento_id'  => 1,//preinscripcion
            't_modulo_id' => 1,//modulo ofimatica
			'DetviDisponibilidad' => 'SABADOS, Tardes',//frecuencia horario
			'DetviPerfil' => 'Interesado', //Perfil
        ));
    }
}

