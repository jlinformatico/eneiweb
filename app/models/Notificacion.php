<?php

class Notificacion extends Eloquent{

	protected $table = 't_notificacion';
	protected $fillable = array('t_usuario_id','t_detalle_visita_id','t_tipo_notificacion_id','NotEstado','NotObservacion');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	**/
	public function usuarioadmin()
	{
		return $this->belongsTo('Usuario','t_usuario_id');
	}

	public function tiponotificacion()
	{
		return $this->belongsTo('TipoNotificacion','t_tipo_notificacion_id');
	}

	public function detallevisita()
	{
		return $this->belongsTo('DetalleVisita','t_detalle_visita_id');
	}

}
