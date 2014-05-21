<?php

class TipoVisita extends Eloquent{

	protected $table = 't_tipo_visita';
	protected $fillable = array('TViNombre');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	**/
	public function visita()
	{
		return $this->belongsTo('Visita','t_tipo_visita_id');
	}

}
