<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PersonaTableSeeder');
		$this->call('TipoUsuarioTableSeeder');
		$this->call('UsuarioTableSeeder');
		$this->call('CategoriaTableSeeder');
		$this->call('PublicacionTableSeeder');
		$this->call('ClienteTableSeeder');
		$this->call('ModuloTableSeeder');
		$this->call('GrupoTableSeeder');
		$this->call('CursoTableSeeder');
		$this->call('TipoVisitaTableSeeder');
		$this->call('MovimientoTableSeeder');
		$this->call('TipoNotificacionTableSeeder');
		$this->call('VisitaTableSeeder');
		$this->call('DisponibilidadTableSeeder');
		$this->call('PerfilTableSeeder');
		$this->call('DetalleVisitaTableSeeder');
		//notificaciones
	}

}
