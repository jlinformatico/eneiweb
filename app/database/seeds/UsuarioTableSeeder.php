<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class UsuarioTableSeeder extends Seeder {
    public function run(){
        Usuario::create(array(
			'PK_Usuario'  => 'admin',
			't_persona_id'  => 1,
            'password' => Hash::make('admin'),
			't_tipo_usuario_id'     => 1, //tipo de usuario
            'UsuEstado'=> 1,
        ));
    }
}
