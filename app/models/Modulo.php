<?php

class Modulo extends Eloquent {

	protected $table = 't_modulo'; //people
	protected $fillable = array('ModNombre', 'ModDuracion', 'ModPrecio');

	//funcion para el combobox de Cursos para registrar preinscritos
	public static function onModulos($id)
	{
		$modulo = Modulo::find($id)->tipousuarios()->lists('id');
		return $modulo;
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function cursos()
	{
		return $this->HasMany('Curso','t_modulo_id');
	}

}
