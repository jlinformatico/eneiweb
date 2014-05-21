<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class MovimientoTableSeeder extends Seeder {
    public function run(){
        Movimiento::create(array(
            'MovNombre'  => 'Preinscripcion',
        ));

		Movimiento::create(array(
            'MovNombre'  => 'Matricula',
        ));
    }
}

