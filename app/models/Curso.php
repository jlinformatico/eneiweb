<?php

class Curso extends Eloquent {

	protected $table = 't_curso'; //people
	protected $fillable = array('PK_Curso', 'CurNombre', 't_modulo_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function modulo()
	{
		return $this->belongsTo('Modulo','t_modulo_id');
	}

}
