<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class TipoVisitaTableSeeder extends Seeder {
    public function run(){
        TipoVisita::create(array(
            'TViNombre'  => 'Presencial',
        ));

		TipoVisita::create(array(
            'TViNombre'  => 'Virtual',
        ));
    }
}

