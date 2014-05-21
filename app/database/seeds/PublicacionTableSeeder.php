<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class PublicacionTableSeeder extends Seeder {
    public function run(){
        Publicacion::create(array(
			't_usuario_id'  => 1,
			't_categoria_id'  => 1,
			'PubTitulo'     => 'Porque capacitarte en el INEI', //tipo de usuario
            'PubUrl'=>'Porque-capacitarte-en-el-inei',
			'PubContenido'=>'Es de suma importancia por ser una entidad del estado',
			'PubEstado'  => 1,
        ));
    }
}
