<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class CategoriaTableSeeder extends Seeder {
    public function run(){
        Categoria::create(array(
			'CatNombre'  => 'Oficial',
			'CatDescripcion'  => 'Categoria General',
        ));
    }
}
