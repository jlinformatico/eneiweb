<?php

class WebController extends BaseController {

	public function index()
	{
		$posts = Post::where('status', '=', 1)->paginate(3);
		return View::make('index')->with('posts', $posts);
	}

	public function get_catalogo()
	{
		return View::make('pages.catalogo');
	}
	
	public function get_curso()
	{
		return View::make('pages.curso');
	}
		
	public function get_servicio()
	{
		return View::make('pages.servicios');
	}


}
