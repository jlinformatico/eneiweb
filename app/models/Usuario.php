<?php

class Usuario extends Eloquent {

	protected $table = 't_usuario';
	protected $fillable = array('t_tipo_usuario_id', 't_persona_id','UsuEstado');

	//funcion para el combobox de Tipos de Usuarios
	public static function onTipoUsuarios($id)
	{
		$tipousuarios = Usuario::find($id)->tipousuarios()->lists('id');
		return $tipousuarios;
	}


	//funciones de las relaciones
	public function tipousuarios()
	{
		return $this->belongsTo('TipoUsuario', 't_tipo_usuario_id');
	}

	public function persona()
	{
		return $this->belongsTo('Persona', 't_persona_id');
	}
	
	public function publicaciones()
	{
		return $this->hasMany('Publicacion','t_usuario_id');
	}

}
