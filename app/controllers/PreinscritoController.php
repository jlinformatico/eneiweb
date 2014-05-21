<?php

class PreinscritoController extends BaseController {

	/*
	|------------------------------------------------------------------------------
	| Controlador de la gestion de preinscritos
	|-------------------------------------------------------------------------------
	*/

	public function index()
	{
		// get usuarios
		//$users = Usuario::all();
		//$preinscrito=Visita::all();

		//return View::make('admin.usuarios.index', array('personas' => $personas, 'users'=> $users));
		//return View::make('admin.usuarios.index')->with('users', $users);
			// Con la funcion with() podemos traer todos los vendedores
		// con sus respectivos productos. Esta funcion recibe como parametro
		// alguna relacion que tenga el modelo al que se este llamando y
		// la incluye en los resultados que devuelve el get()
		$preinscrito = Visita::with('visitapreinscripcion')->get();
		//$visitas=Visita::all()->paginate(3);
		//$preinscrito=$visitas->visitapreinscripcion->get();
		//return View::make('admin.usuarios.index', array('users'=> $users));
		//Solo me lista administradores
		//$users=Usuario::where('FK_TipoUsuario','=','1')->get();
		return View::make('preinscrito.index', array('preinscrito' => $preinscrito));
		//$query=Usuario::with();
	}

	public function create()
	{
		// load the create form (app/views/preinscrito/create.blade.php)
		$modulocombo = Modulo::all()->lists('ModCertificado', 'id');
		return View::make('preinscrito.create')->with('modulocombo', $modulocombo);
	}

	public function store()
	{
		// para procesar el registro de una visita
		// read more on validation at http://laravel.com/docs/validation

		$rules = array(
			//'pkpersona' => 'required',
			'email' => 'required|email',
			//'celular' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('preinscritos/create')
				->withErrors($validator);

		} else {
			// registro de una visita de preinscripcion

			$person= new Persona;
				$person->PK_Persona = Input::get('dni');
				$person->PeNombre = Input::get('nombrepersona');
				$person->PeApellidoPaterno = Input::get('apellidopaterno');
				$person->PeApellidoMaterno = Input::get('apellidomaterno');
				$person->PeSexo = 'M';
				$person->PeDireccion = Input::get('direccion');
				$person->PeCelular = Input::get('celular');
				$person->PeTel = Input::get('telefono');
				$person->PeEstado = 1;
				$person->PeFechaNac = 1991-11-03;
				$person->PeEmail = Input::get('email');
			$person->save();

			$cliente= new Cliente;
				$cliente->t_persona_id=$person->id;
				$cliente->PK_Cliente=Input::get('dni');
				$cliente->password = Hash::make('clientenei'); //Input::get('password')
				$cliente->CliEstado=1;
			$cliente->save();

			$visita = new Visita;
				$visita->t_usuario_id=Auth::user()->id;
				$visita->t_cliente_id=$cliente->id;
				$visita->t_tipo_visita_id=1;
			$visita->save();
			
			$modulo=Input::get('modulocombo');
			
			foreach($modulo as $curso)
			{
				$detalle = new DetalleVisita;
					$detalle->t_visita_id=$visita->id;
					$detalle->t_movimiento_id=1;
					$detalle->t_modulo_id=$curso;
					$detalle->DetviDisponibilidad=Input::get('disponibilidad');
					$detalle->DetviPerfil=Input::get('nivel_interes');
				$detalle->save();
			}
			// redirect
			Session::flash('message', 'El Cliente ha sido preinscrito!');
			return Redirect::to('/preinscritos');
		}
	}

	/**
	 */

	public function show($id)
	{
		// get the nerd
		$user = Cliente::find($id);

		// show the view and pass the nerd to it
		return View::make('preinscrito.show')
			->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$user = Cliente::find($id);

		// show the edit form and pass the nerd
		return View::make('preinscrito.editar')
			->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'username'       => 'required',
			'email'      => 'required|email',
			'name' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('usuarios/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = Cliente::find($id);
			$user->username       = Input::get('username');
			$user->email      = Input::get('email');
			$user->name = Input::get('name');
			$user->save();

			// redirect
			Session::flash('message', 'Usuario editado satisfactoriamente!');
			return Redirect::to('usuarios');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$user = Cliente::find($id);
		$user->delete();

		// redirect
		Session::flash('message', 'Usuario eliminado satisfactoriamente!');
		return Redirect::to('usuarios');
	}
	
}
