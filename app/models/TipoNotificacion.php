<?php

class TipoNotificacion extends Eloquent{

	protected $table = 't_tipo_notificacion';
	protected $fillable = array('TnotNombre');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	**/
	public function notificaciones()
	{
		return $this->hasMany('Notificacion','t_tipo_notificacion_id');
	}

}
