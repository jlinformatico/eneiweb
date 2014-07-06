<?php

class Disponibilidad extends Eloquent {

	protected $table = 't_disponibilidad'; //people
	protected $fillable = array('DispNombre', 'DispFrecuencia', 'DispTurno', 'DispHorario');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function detalledisponibilidad()
	{
		return $this->belongsTo('DetalleVisita','t_disponibilidad_id');
	}

}
