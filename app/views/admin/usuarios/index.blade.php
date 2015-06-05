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
                    <li><a href="{{URL::to('usuarios/create')}}">Nuevo Usuario</a>
                    </li>
                </ol>
            </div>

		</div>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Usuario</td>
			<td>Tipo Usuario</td>
			<td>E-mail</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td>{{$value->persona->PeNombre}}</td>
			<td>{{$value->tipousuarios->TipoUsuNombre}}</td>

			<td>{{$value->persona->PeEmail}}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>
				<!-- mostrar info del usuario (uses the show method found at GET /usuarios/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Ver info</a>

				<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/edit') }}">Editar</a>
				
				<a class="btn btn-danger" href="{{ URL::to('usuarios/delete/' . $value->id ) }}">Eliminar</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
@stop
