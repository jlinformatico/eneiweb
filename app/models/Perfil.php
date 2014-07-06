<?php

class Perfil extends Eloquent {

	protected $table = 't_perfil'; //people
	protected $fillable = array('PerNombre', 'PerDescripcion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function detalleperfil()
	{
		return $this->belongsTo('DetalleVisita','t_perfil_id');
	}

}
