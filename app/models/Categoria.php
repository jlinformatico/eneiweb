<?php

class Categoria extends Eloquent{


	protected $table = 't_categoria';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	**/
	public function publicaciones()
	{
		return $this->hasMany('Publicacion');
	}

}
