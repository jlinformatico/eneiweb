<?php

class Matricula extends Eloquent {

	protected $table = 't_matricula'; //people
	protected $fillable = array('PK_Matricula','t_cliente_id', 't_usuario_id', 't_grupo_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function grupo()
	{
		return $this->belongsTo('Grupo','t_grupo_id');
	}

	public function usuario()
	{
		return $this->belongsTo('Usuario','t_usuario_id');
	}

}
