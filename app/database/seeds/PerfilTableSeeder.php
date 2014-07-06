<?php

/**
 * Agregamos un curso nuevo a la base de datos.
 */
class PerfilTableSeeder extends Seeder {
    public function run(){
		Perfil::create(array(
            'PerNombre'  => 'Alto',
            'PerDescripcion'     => 'Está muy interesado, desea matricularse',
        ));

        Perfil::create(array(
            'PerNombre'  => 'Regular',
            'PerDescripcion'     => 'Está regularmente interesado, puede esperar',         
        ));

        Perfil::create(array(
            'PerNombre'  => 'Bajo',
            'PerDescripcion'     => 'Está poco interesado, dudando de su inscripcion',      
        ));

    }
}

