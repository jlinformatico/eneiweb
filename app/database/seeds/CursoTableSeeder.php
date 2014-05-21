<?php

/**
 * Agregamos un curso nuevo a la base de datos.
 */
class CursoTableSeeder extends Seeder {
    public function run(){
		Curso::create(array(
            'PK_Curso'  => 'OF-01-WIN',
            'CurNombre'     => 'Windows',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '1',
        ));

        Curso::create(array(
            'PK_Curso'  => 'OF-02-WOR',
            'CurNombre'     => 'Word',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '2',            
        ));

        Curso::create(array(
            'PK_Curso'  => 'OF-03-EXE',
            'CurNombre'     => 'Excel',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '3',            
        ));
        
        Curso::create(array(
            'PK_Curso'  => 'OF-04-INT',
            'CurNombre'     => 'Internet',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '4',            
        ));

        Curso::create(array(
            'PK_Curso'  => 'OF-05-POW',
            'CurNombre'     => 'Power Point',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '5',            
        ));

        Curso::create(array(
            'PK_Curso'  => 'OF-06-ACC',
            'CurNombre'     => 'Access',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '6',            
        ));

        Curso::create(array(
            'PK_Curso'  => 'OF-07-PUB',
            'CurNombre'     => 'Publisher',
            'CurDuracion'     => '1',
            't_modulo_id'     => '1',
            'CurOrden'     => '7',            
        ));
        
        Curso::create(array(
            'PK_Curso'  => 'EE-01-BAS',
            'CurNombre'     => 'Excel Basico',
            'CurDuracion'     => '1',
            't_modulo_id'     => '2',
            'CurOrden'     => '1',   
        ));
        Curso::create(array(
            'PK_Curso'  => 'EE-02-INT',
            'CurNombre'     => 'Excel Intermedio',
            'CurDuracion'     => '1',
            't_modulo_id'     => '2',
            'CurOrden'     => '2',
        ));
        Curso::create(array(
            'PK_Curso'  => 'EE-03-AVA',
            'CurNombre'     => 'Excel Avanzado',
            'CurDuracion'     => '1',
            't_modulo_id'     => '2',
            'CurOrden'     => '3',
        ));
        Curso::create(array(
            'PK_Curso'  => 'EE-04-FIN',
            'CurNombre'     => 'Excel Financiero',
            'CurDuracion'     => '1',
            't_modulo_id'     => '2',
            'CurOrden'     => '4',
        ));

        Curso::create(array(
            'PK_Curso'  => 'DG-01-COR',
            'CurNombre'     => 'Corel Draw',
            'CurDuracion'     => '1',
            't_modulo_id'     => '3',
            'CurOrden'     => '1',
        ));
        Curso::create(array(
            'PK_Curso'  => 'DG-02-PHO',
            'CurNombre'     => 'PHOTOSHOP',
            'CurDuracion'     => '1',
            't_modulo_id'     => '3',
            'CurOrden'     => '2',
        ));
        Curso::create(array(
            'PK_Curso'  => 'DG-03-IND',
            'CurNombre'     => 'INDESIGN',
            'CurDuracion'     => '1',
            't_modulo_id'     => '3',
            'CurOrden'     => '3',
        ));
        Curso::create(array(
            'PK_Curso'  => 'SB-01-BAS',
            'CurNombre'     => 'SPSS Basico',
            'CurDuracion'     => '1',
            't_modulo_id'     => '4',
            'CurOrden'     => '1',
        ));
        Curso::create(array(
            'PK_Curso'  => 'SB-01-INT',
            'CurNombre'     => 'SPSS Intermedio',
            'CurDuracion'     => '1',
            't_modulo_id'     => '5',
            'CurOrden'     => '1',
        ));
    }
}

