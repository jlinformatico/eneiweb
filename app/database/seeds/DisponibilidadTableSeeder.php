<?php

/**
 * Agregamos un curso nuevo a la base de datos.
 */
class DisponibilidadTableSeeder extends Seeder {
    public function run(){
		Disponibilidad::create(array(
            'DispNombre'  => 'LUN-MIE-VIE, Mañana - 09:00-10:40',
            'DispFrecuencia'     => 'LUN-MIE-VIE',
			'DispTurno' => 'Mañana',
            'DispHorario'     => '09:00-10:40',
        ));

        Disponibilidad::create(array(
            'DispNombre'  => 'LUN-MIE-VIE, Tarde - 16:20-18:00',
            'DispFrecuencia'     => 'LUN-MIE-VIE',
			'DispTurno' => 'Tarde',
            'DispHorario'     => '16:20-18:00',           
        ));

        Disponibilidad::create(array(
            'DispNombre'  => 'LUN-MIE-VIE, Noche, 20:00-21:40',
            'DispFrecuencia'     => 'LUN-MIE-VIE',
			'DispTurno' => 'Noche',
            'DispHorario'     => '20:00-21:40',          
        ));

    }
}

