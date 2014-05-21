<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class ModuloTableSeeder extends Seeder {
    public function run(){
        Modulo::create(array(
            'ModNombre'  => 'Ofimática',
            'ModDuracion'     => '5',
            'ModPrecio'     => '250',
            'ModEstado'     => '1',
            'ModCertificado'     => 'Especialista en Ofimática',
        ));

		Modulo::create(array(
            'ModNombre'  => 'Excel Pack',
            'ModDuracion'     => '4',
            'ModPrecio'     => '250',
            'ModEstado'     => '1',
            'ModCertificado'     => 'Especialista en Excel Avanzado',
        ));

		Modulo::create(array(
            'ModNombre'  => 'Diseño Gráfico',
            'ModDuracion'     => '3',//meses
            'ModPrecio'     => '170',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en Diseño Gráfico',
        ));

		Modulo::create(array(
            'ModNombre'  => 'SPSS Basico',
            'ModDuracion'     => '1',//meses
            'ModPrecio'     => '100',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en SPSS Basico',
        ));

		Modulo::create(array(
            'ModNombre'  => 'SPSS Intermedio',
            'ModDuracion'     => '1',//meses
            'ModPrecio'     => '150',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en SPSS Intermedio',
        ));
    }
}

