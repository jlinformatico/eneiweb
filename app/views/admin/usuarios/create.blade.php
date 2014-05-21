@extends('layouts.base')

@section('content')
<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Usuarios del Sistema
                    <small>Gestión de Permisos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('usuarios')}}">Listar Usuarios</a>
                    </li>
                    <li class="active">Registro de Usuario</li>
                </ol>
            </div>

		</div>

<h1>Crear Usuario</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'usuarios/create')) }}

	<div class="form-group">
		{{ Form::label('username', 'Usuario') }}
		{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('t_tipo_usuario_id', 'Tipo Usuario') }}
		{{ Form::select('tipousuarios[]',$tipousuarios, array(1), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Registrate!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@stop
