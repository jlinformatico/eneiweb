<?php

class Visita extends Eloquent {

	protected $table = 't_visita'; //people
	protected $fillable = array('t_usuario_id', 't_cliente_id', 't_tipo_visita_id');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function usuarioatiende()
	{
		return $this->belongsTo('Usuario','t_usuario_id');
	}

	public function clientevisita()
	{
		return $this->belongsTo('Cliente','t_cliente_id');
	}

	public function tipodevisita()
	{
		return $this->belongsTo('TipoVisita','t_tipo_visita_id');
	}

	public function detallevisita()
	{
		return $this->HasOne('DetalleVisita','t_visita_id');
	}

	//En una Visita se realizan muchos Movimientos y viceversa
	public function visitapreinscripcion()
	{
		return $this->belongsToMany('Movimiento','t_detalle_visita')->withPivot('t_visita_id','t_movimiento_id');
	}
}

