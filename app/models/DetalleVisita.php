<?php

class DetalleVisita extends Eloquent {

	protected $table = 't_detalle_visita'; //people
	protected $fillable = array('t_visita_id','t_movimiento_id','t_modulo_id','t_disponibilidad_id','t_perfil_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function visita()
	{
		return $this->belongsTo('Visita','t_visita_id');
	}

	public function movimiento()
	{
		return $this->belongsTo('Movimiento','t_movimiento_id');
	}

	public function modulo()
	{
		return $this->belongsTo('Modulo','t_modulo_id');
	}

	public function disponibilidad()
	{
		return $this->belongsTo('Disponibilidad','t_disponibilidad_id');
	}

	public function perfil()
	{
		return $this->belongsTo('Perfil','t_perfil_id');
	}

	public function notificaciones()
	{
		return $this->HasMany('Notificacion','t_detalle_visita_id');
	}

}
