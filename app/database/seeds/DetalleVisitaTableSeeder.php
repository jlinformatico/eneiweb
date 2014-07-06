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
			't_disponibilidad_id' => 1,//frecuencia horario
			't_perfil_id' => 1, //Perfil
			'DetObservacion'=>'Desea comenzar de inmediato',
        ));
       DetalleVisita::create(array(
			't_visita_id'  => 2,//visita
			't_movimiento_id'  => 1,//preinscripcion
            't_modulo_id' => 1,//modulo ofimatica
			't_disponibilidad_id' => 2,//frecuencia horario
			't_perfil_id' => 2, //Perfil
			'DetObservacion'=>'Quiere hablar con el coordinador ya que viajara de vez en cuando',
        ));
    }
}

