@extends('layouts.base')

@section('content')

<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Gestión de Preinscritos
                    <small>Grupos tentativos</small>
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

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Fecha de Registro</td>
			<td>DNI</td>
			<td>Datos Personales</td>
			<td>Celular/Telefono</td>
			<td>E-mail</td>
			<td>Disponibilidad</td>
			<td>Curso</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
	
	@foreach($preinscrito as $value)
		<tr>
			<td>{{$value->created_at}}</td>
			<td>{{Cliente::find($value->t_cliente_id)->persona->PK_Persona}}</td>
			<td>{{Cliente::find($value->t_cliente_id)->persona->PeNombre.' '.Cliente::find($value->t_cliente_id)->persona->PeApellidoPaterno.' '.Cliente::find($value->t_cliente_id)->persona->PeApellidoMaterno}}</td>
			<td>{{Cliente::find($value->t_cliente_id)->persona->PeCelular.' / '.Cliente::find($value->t_cliente_id)->persona->PeTel}}</td>
			<td>{{Cliente::find($value->t_cliente_id)->persona->PeEmail}}</td>
			<td>{{$value->detallevisita->DetviDisponibilidad}}</td>
			<td>{{Modulo::find($value->detallevisita->t_modulo_id)->ModCertificado}}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>
				<!-- mostrar info del usuario (uses the show method found at GET /usuarios/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('preinscritos/' . $value->t_cliente_id) }}">Notificar</a>
				
				<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('preinscritos/' . $value->id . '/edit') }}">Editar</a>
			</td>
		</tr>

	@endforeach
	</tbody>

</table>

</div>
@stop
