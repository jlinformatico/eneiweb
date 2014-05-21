<?php

class TipoUsuario extends Eloquent{


	protected $table = 't_tipo_usuario';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	**/
	public function usuarios()
	{
		return $this->hasMany('Usuario');
	}

}
