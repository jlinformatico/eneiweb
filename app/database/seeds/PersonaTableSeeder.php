<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class PersonaTableSeeder extends Seeder {
    public function run(){
        Persona::create(array(
			'PK_Persona'  => '46835554',
			'PeNombre'  => 'Jorge Antonio',
			'PeApellidoPaterno'  => 'Linares',
			'PeApellidoMaterno'  => 'Vera',
			'PeSexo'  => 'M',
			'PeDireccion'  => 'Urb. Perez Gamboa Mz D lote 3',
			'PeCelular'  => '952949785',
			'PeTel'  => '052400647',
            'PeEmail' => 'admin@admin.com',
            'PeEstado'=> 1, //
            'PeFechaNac' => '1991-11-03',
        ));
        Persona::create(array(
			'PK_Persona'  => '42500935',
			'PeNombre'  => 'Eli Jonathan',
			'PeApellidoPaterno'  => 'Conde',
			'PeApellidoMaterno'  => 'Maquera',
			'PeSexo'  => 'M',
			'PeDireccion'  => 'Los Robles Mz-o3 Lte 28',
			'PeCelular'  => '954408241',
			'PeTel'  => '052400647',
            'PeEmail' => 'jonathanconde1@gmail.com',
            'PeEstado'=> 1, //
            'PeFechaNac' => '1985-11-03',
        ));
        Persona::create(array(
			'PK_Persona'  => '42500936',
			'PeNombre'  => 'Lisa',
			'PeApellidoPaterno'  => 'Chambilla',
			'PeApellidoMaterno'  => 'Mamani',
			'PeSexo'  => 'F',
			'PeDireccion'  => 'Los Robles Mz-o3 Lte 28',
			'PeCelular'  => '954408241',
			'PeTel'  => '052400647',
            'PeEmail' => 'lisa@gmail.com',
            'PeEstado'=> 1, //
            'PeFechaNac' => '1985-11-03',
        ));
    }
}

