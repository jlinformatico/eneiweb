<?php


class Publicacion extends Eloquent {

	protected $table = 't_publicacion';
	protected $fillable = array('t_usuario_id','t_categoria_id','PubTitulo','PubContenido');

	//funciones de las relaciones
	public function usuario()
	{
		return $this->belongsTo('Usuario', 't_usuario_id');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria', 't_categoria_id');
	}
	

}
