<?php

class Movimiento extends Eloquent {

	protected $table = 't_movimiento';
	protected $fillable = array('MovNombre');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function detallevisita()
	{
		return $this->hasMany('DetalleVisita','t_movimiento_id');
	}

}
