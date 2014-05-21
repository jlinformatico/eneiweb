<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface {

	protected $table = 't_usuario';
	protected $fillable = array('PK_Usuario', 't_tipo_usuario_id', 't_persona_id','UsuEstado');
	protected $hidden = array('password');

	//funcion para el combobox de Tipos de Usuarios
	public static function onTipoUsuarios($id)
	{
		$tipousuarios = Usuario::find($id)->tipousuarios()->lists('id');
		return $tipousuarios;
	}

	public static function isLogged()
	{
		if(Session::has('PK_Usuario'))
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

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
	
	public function getAuthPassword()
	{
		return $this->password;
	}
			/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getReminderEmail()
	{
		return $this->email;
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
