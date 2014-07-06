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

<div class="row">
	<div class="col-lg-1">
		<h4>Búsqueda:</h4>
	</div>
	<div class="col-lg-4">
		{{ Form::open(array('method' => 'POST','url' => 'preinscritos/','role' => 'form')) }}
		<div class="form-group">
			{{ Form::select('modulocombo',$modulocombo, array(1), array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="col-lg-7">
		{{ Form::submit('Buscar', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
</div>

<div class="row">
	
	@if(count($preinscrito) > 0)
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Fecha Registro</th>
				<th>DNI</th>
				<th>Datos Personales</th>
				<th>Celular/Teléfono</th>
				<th>E-mail</th>
				<th>Disponibilidad</th>
				<th>Curso</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		
		@foreach($preinscrito as $value)
			<tr>
				<td>{{$value->created_at}}</td>
				<td>{{Cliente::find($value->visita->t_cliente_id)->persona->PK_Persona}}</td>
				<td>{{Cliente::find($value->visita->t_cliente_id)->persona->PeNombre.' '.Cliente::find($value->visita->t_cliente_id)->persona->PeApellidoPaterno.' '.Cliente::find($value->visita->t_cliente_id)->persona->PeApellidoMaterno}}</td>
				<td>{{Cliente::find($value->visita->t_cliente_id)->persona->PeCelular.' / '.Cliente::find($value->visita->t_cliente_id)->persona->PeTel}}</td>
				<td>{{Cliente::find($value->visita->t_cliente_id)->persona->PeEmail}}</td>
				<td>{{Disponibilidad::find($value->t_disponibilidad_id)->DispNombre}}</td>
				<td>{{Modulo::find($value->t_modulo_id)->ModCertificado.' S/.'.Modulo::find($value->t_modulo_id)->ModPrecio }}</td>

				<!-- we will also add show, edit, and delete buttons -->
				<td>
					<div class="btn-group">
						<a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                        Acción
                        <span class="caret"></span>
                        </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- mostrar info del detalle visita (GET /preinscritos/{id} -->
                                        <a href="{{ URL::to('preinscritos/' . $value->id) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Notificar
                                        </a>
                                    </li>
                                    <li>
										<!-- editar usuario (uses the edit method found at GET /preinscritos/{id}/edit -->
                                        <a href="{{ URL::to('preinscritos/' . $value->id . '/edit') }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Editar
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::to('preinscritos/' . $value->id ) }}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Eliminar
                                        </a>
                                    </li>
                                </ul>
                     </div>
				</td>
			</tr>

		@endforeach
		</tbody>
	</table>
	{{$preinscrito->links()}}
	
	@else
			<div class="alert alert-danger">No hay resultados obtenidos</div>
	@endif
</div>

</div>
@stop
