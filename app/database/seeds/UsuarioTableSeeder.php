<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class UsuarioTableSeeder extends Seeder {
    public function run(){
        Usuario::create(array(
			't_persona_id'  => 1,
			't_tipo_usuario_id'     => 1, //tipo de usuario
            		'UsuEstado'=> 1,
        ));
    }
}
