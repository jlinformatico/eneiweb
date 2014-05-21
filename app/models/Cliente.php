<?php


class Cliente extends Eloquent {

	protected $table = 't_cliente';
	protected $fillable = array('PK_Cliente','t_persona_id','CliEstado');
	protected $hidden = array('password');

	public static function isLogged()
	{
		if(Session::has('PK_Cliente'))
			return true;
		else
			return false;
	}

	/**
	public static function isAdmin()
	{
		if(Session::get('FK_TipoUsuario') = 1)
			return true;
		else
			return false;
	}
	*/

	//funciones de las relaciones

	public function persona()
	{
		return $this->belongsTo('Persona', 't_persona_id');
	}

	public function visitas()
	{
		return $this->hasMany('Visita', 't_cliente_id');
	}

}
