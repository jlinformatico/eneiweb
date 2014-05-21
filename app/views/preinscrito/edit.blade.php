@extends('layouts.base')

@section('content')

<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Gestión de Preinscritos
                    <small>Editar Preinscrito</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('preinscritos')}}">Listar Preinscritos</a>
                    </li>
                    <li><a href="{{URL::to('preinscritos/create')}}">Nuevo Preinscrito</a>
                    </li>
                </ol>
            </div>
		</div>

<h1>Editar Usuario {{ $user->username }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('/usuarios/{id}/edit', $user->id), 'method' => 'PUT')) }}
	<div class="form-group">
		{{ Form::label('username', 'Usuario') }}
		{{ Form::text('username', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('name', 'Tipo Usuario') }}
		{{ Form::select('name', array('0' => 'Select a Level', 'Admin' => 'Administrador', 'Super' => 'Supervisor', 'Pract' => 'Practicante'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Editar Usuario!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@stop
