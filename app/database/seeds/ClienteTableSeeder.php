<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class ClienteTableSeeder extends Seeder {
    public function run(){
       Cliente::create(array(
		't_persona_id'  => 2,
		'CliEstado'=> 1,
        ));
       Cliente::create(array(
		't_persona_id'  => 3,
		'CliEstado'=> 1,
        ));
    }
}
