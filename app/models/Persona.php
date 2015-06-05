<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Persona extends Eloquent implements UserInterface {

	protected $table = 't_persona'; //people
	protected $fillable = array('PK_Persona', 'PeNombre','PeApellidoPaterno','PeApellidoMaterno');
	protected $hidden = array('password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

/*
	public static function isLogged()
	{
		if(Session::has('PK_Persona'))
			return true;
		else
			return false;
	}

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

	//relaciones

	public function usuario()
	{
		return $this->hasOne('Usuario','t_persona_id');
	}

	public function cliente()
	{
		return $this->hasOne('Cliente','t_persona_id');
	}

}
