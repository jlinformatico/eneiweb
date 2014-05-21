<?php

class Persona extends Eloquent {

	protected $table = 't_persona'; //people
	protected $fillable = array('PK_Persona', 'PeNombre', 'PeApellidoPaterno','PeApellidoMaterno');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function usuario()
	{
		return $this->hasOne('Usuario','t_persona_id');
	}

	public function cliente()
	{
		return $this->hasOne('Cliente','t_persona_id');
	}

}
