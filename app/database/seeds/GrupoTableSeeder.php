<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class GrupoTableSeeder extends Seeder {
    public function run(){
        Grupo::create(array(
            'PK_Grupo'  => 'OF-01-2014',
            't_modulo_id'   => 1,
            'Correlativo'     => '1',
            'GruEstado'     => '1',//programado, 2: en formacion, 3: en aprobacion
            'GruFechaInicio'     => '2014-05-12',
			'GruFechaFinal'     => '2014-10-12',
			't_usuario_id'   => 1,
        ));

    }
}

