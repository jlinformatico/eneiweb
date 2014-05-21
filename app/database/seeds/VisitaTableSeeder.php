<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class VisitaTableSeeder extends Seeder {
    public function run(){

       Visita::create(array(
			't_cliente_id'  => 1,//cliente
			't_usuario_id'  => 1,//administrador
            't_tipo_visita_id' => 1,//presencial
        ));
       Visita::create(array(
			't_cliente_id'  => 2,//cliente
			't_usuario_id'  => 1,//administrador
            't_tipo_visita_id' => 1,//presencial
        ));
    }
}

