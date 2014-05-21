<?php

class Grupo extends Eloquent {

	protected $table = 't_grupo'; //people
	protected $fillable = array('PK_Grupo','t_modulo_id', 't_usuario_id', 'GruFechaInicio','GruFechaFinal');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function modulo()
	{
		return $this->belongsTo('Modulo','t_modulo_id');
	}

	public function usuario()
	{
		return $this->belongsTo('Usuario','t_usuario_id');
	}

}
