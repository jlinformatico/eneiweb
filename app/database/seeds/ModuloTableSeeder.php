<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class ModuloTableSeeder extends Seeder {
    public function run(){
        Modulo::create(array(
            'ModNombre'  => 'Ofimática',
			'ModDescripcion'  => 'El presente módulo contiene cursos básicos de windows y el paquete ofimático (word, excel, powerpoint, access, publisher) e internet',
            'ModDuracion'     => '5',
            'ModPrecio'     => '250',
            'ModEstado'     => '1',
            'ModCertificado'     => 'Especialista en Ofimática',
        ));

		Modulo::create(array(
            'ModNombre'  => 'Excel Pack',
			'ModDescripcion'  => 'El presente módulo contiene cursos de excel básico, intermedio, avanzado y financiero',
            'ModDuracion'     => '4',
            'ModPrecio'     => '250',
            'ModEstado'     => '1',
            'ModCertificado'     => 'Especialista en Excel',
        ));

		Modulo::create(array(
            'ModNombre'  => 'Diseño Gráfico',
			'ModDescripcion'  => 'El presente módulo contiene cursos de corel draw, photoshop e indesign',
            'ModDuracion'     => '3',//meses
            'ModPrecio'     => '170',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en Diseño Gráfico',
        ));

		Modulo::create(array(
            'ModNombre'  => 'SPSS Basico',
			'ModDescripcion'  => 'El presente módulo es una introducción básica al paquete estadístico SPSS',
            'ModDuracion'     => '1',//meses
            'ModPrecio'     => '100',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en SPSS Basico',
        ));

		Modulo::create(array(
            'ModNombre'  => 'SPSS Intermedio',
			'ModDescripcion'  => 'El presente módulo es la continuación del SPSS básico',
            'ModDuracion'     => '1',//meses
            'ModPrecio'     => '150',
            'ModEstado'     => '1',//habilitado
            'ModCertificado'     => 'Especialista en SPSS Intermedio',
        ));
    }
}

