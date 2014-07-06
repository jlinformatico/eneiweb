<?php

class AdminController extends BaseController {

	public function index()
	{
		return View::make('admin.index');
	}

	//listar todos los modulos
	public function modulos_all()
	{
		$modulos = Modulo::paginate(5);
		return View::make('admin.modulos.modulos')->with('modulos',$modulos);
	}

	//crear modulos
	public function modulos_create()
	{
		
		$rules = array(
			//'nombre' => 'required',
			//'Mod' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// procesa el registro si no hay errores
		if ($validator->fails()) {
			return Redirect::to('modulos')
				->withErrors($validator);

		} else {
			// registro de un modulo
			
			$modulo= new Modulo;
				$modulo->ModNombre = Input::get('nombre');
				$modulo->ModDescripcion = Input::get('descripcion');
				$modulo->ModDuracion = Input::get('duracion');
				$modulo->ModPrecio = Input::get('precio');
				$modulo->ModCertificado = Input::get('certificado');
				$modulo->ModEstado = 1;
			$modulo->save();

			// redirect
			Session::flash('message', 'El módulo ha sido registrado!');
			return Redirect::to('/modulos');
		}
	}

	//editar modulos

	public function modulos_edit($id)
	{
		$modulo = Modulo::find($id);
		return View::make('admin.modulos.editar')->with('modulo', $modulo);
	}

	public function modulos_update($id)
	{
		$input = Input::all();

		$rules = array(
			'nombre' => 'required',
			'descripcion' => 'required',
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$modulo= Modulo::find($id);
				$modulo->ModNombre = Input::get('nombre');
				$modulo->ModDescripcion = Input::get('descripcion');
				$modulo->ModDuracion = Input::get('duracion');
				$modulo->ModPrecio = Input::get('precio');
				$modulo->ModCertificado = Input::get('certificado');
				$modulo->ModEstado = 1;
			$modulo->save();

			return Redirect::to('/modulos');
		}
	}

	//eliminar modulos

	//listar todos los cursos
	public function cursos_all()
	{
		$cursos = Curso::paginate(7);
		$modulocombo = Modulo::all()->lists('ModCertificado','id');
		return View::make('admin.cursos.cursos')->with('cursos',$cursos)->with('modulocombo',$modulocombo);
	}

	//crear cursos
	
	//editar cursos
	
	//eliminar cursos
	
	//listar todos los grupos
	public function grupos_all()
	{
		$grupos = Grupo::paginate(7);
		$modulocombo = Modulo::all()->lists('ModCertificado','id');
		return View::make('admin.grupos.grupos')->with('grupos',$grupos)->with('modulocombo',$modulocombo);
	}
	//crear grupos
	
	
	public function posts_all()
	{
		$posts = Post::all();
		return View::make('admin.posts.all')->with('posts', $posts);
	}

	public function post($id)
	{
		$post = Post::find($id);
		$categories = Category::all()->lists('name', 'id');
		return View::make('admin.posts.post')->with('post', $post)->with('categories', $categories);
	}

	public function get_add()
	{
		$categories = Category::all()->lists('name', 'id');
		return View::make('admin.posts.post')->with('categories', $categories);
	}

	public function post_add()
	{
		$input = Input::all();

		$rules = array(
			'title' => 'required',
			'url' => 'required',
			'categories' => 'required',
			'status' => 'required',
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$post = new Post;
				$post->title 	= Input::get('title');
				$post->url 		= Input::get('url');
				$post->content 	= Input::get('content');
				$post->status 	= Input::get('status');
				$post->user_id	= Session::get('user_id');
				$post->comments = 0;
			$post->save();

			$categories = Input::get('categories');

			foreach($categories as $category)
			{
				$relation = new Relation;
					$relation->post_id = $post->id;
					$relation->category_id = $category;
				$relation->save();
			}

			return Redirect::to('/admin/posts');
		}
	}

	public function post_edit($id)
	{
		$input = Input::all();

		$rules = array(
			'title' => 'required',
			'url' => 'required',
			'categories' => 'required',
			'status' => 'required',
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$post = Post::find($id);
				$post->title 	= Input::get('title');
				$post->url 		= Input::get('url');
				$post->content 	= Input::get('content');
				$post->status 	= Input::get('status');
			$post->save();

			$categories = Input::get('categories');

			$old_relations = Relation::where('post_id', '=', $id)->delete();

			foreach($categories as $category)
			{
				$relation = new Relation;
					$relation->post_id = $id;
					$relation->category_id = $category;
				$relation->save();
			}

			return Redirect::to('/admin/posts');
		}
	}

	public function categories()
	{
		$categories = Category::all();
		return View::make('admin.categories.categories')->with('categories', $categories);
	}

	public function categories_add()
	{
		$input = Input::all();

		$rules = array(
			'name' => 'required',
			'url' => 'required',
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$category = new Category;
				$category->name = Input::get('name');
				$category->url = Input::get('url');
				$category->description = Input::get('description');
			$category->save();

			return Redirect::to('/admin/categories');
		}
	}

	public function categories_get_edit($id)
	{
		$categories = Category::all();
		$category = Category::find($id);
		return View::make('admin.categories.categories')->with('categories', $categories)->with('category', $category);
	}

	public function categories_post_edit($id)
	{
		$input = Input::all();

		$rules = array(
			'name' => 'required',
			'url' => 'required',
		);

		$validator = Validator::make($input, $rules);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			$category = Category::find($id);
				$category->name = Input::get('name');
				$category->url = Input::get('url');
				$category->description = Input::get('description');
			$category->save();

			return Redirect::to('/admin/categories');
		}
	}

	public function categories_delete($id)
	{
		$category = Category::find($id);
		$category->delete();
		return Redirect::to('/admin/categories');
	}


}
