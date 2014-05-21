<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class ClienteTableSeeder extends Seeder {
    public function run(){
       Cliente::create(array(
			'PK_Cliente'  => 'estudiante1',
			't_persona_id'  => 2,
            'password' => Hash::make('admin'),
            'CliEstado'=> 1,
        ));
       Cliente::create(array(
			'PK_Cliente'  => 'estudiante2',
			't_persona_id'  => 3,
            'password' => Hash::make('admin'),
            'CliEstado'=> 1,
        ));
    }
}
