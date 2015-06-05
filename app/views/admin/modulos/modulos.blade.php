@extends('layouts.base')

@section('content')
<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Módulos de Especialización
                    <small>Gestión de Módulos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('modulos')}}">Listar Módulos</a>
                    </li>
                    <li class="active">Registrar Módulo</li>
                </ol>
            </div>
		</div>
		
	@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all() )}}

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				<div class="pull-left">
					<div class="btn-toolbar">
						<a href="{{ URL::to('cursos/') }}" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus"></span>&nbsp;Nuevo Curso
						</a>
						<a href="{{ URL::to('grupos/') }}" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus"></span>&nbsp;Nuevo Grupo
						</a>
					</div>
				</div>
				<br>
				<br>
				<br>
				{{ Form::open(array('url' => '/modulos')) }}
				<div class="form-group">
					{{ Form::label('nombre', 'Denominación') }}
					{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','placeholder'=>'Ingrese nombre del módulo. Ej. Ofimática')) }}
				</div>
				<div class="form-group">
					{{ Form::label('certificado', 'Certificación') }}
					{{ Form::text('certificado', Input::old('certificado'), array('class' => 'form-control','placeholder'=>'Ej. Especialista en Ofimática')) }}
				</div>
				<div class="form-group">
					<label class="control-label" for="title">Descripción</label>
					<textarea class="form-control" rows="3" name="descripcion" id="descripcion" placeholder="Resumen del Modulo, pequeña descripción">{{{ Input::old('descripcion') }}}</textarea>
				</div>
				<div class="form-group">
					{{ Form::label('duracion', 'Duración (meses)') }}
					{{ Form::select('duracion', array('1' => '1 mes', '2' => '2 meses', '3' => '3 meses', '4' => '4 meses', '5' => '5 meses','6' => '6 meses'), Input::old('duracion'), array('class' => 'form-control')) }}
				</div>				
				<div class="form-group">
					{{ Form::label('precio', 'Precio') }}
					S/. {{ Form::text('precio', Input::old('precio'), array('class' => 'form-control','placeholder'=>'Ingrese el precio, ej. 250.00')) }}
				</div>
				{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Resetear', array('class'=>'btn btn-default'))}}
				{{ Form::close() }}
			</div>

			<div class="col-lg-8">
				<div class="pull-right">
					{{$modulos->links()}}
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Duración</th>
							<th>Precio</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($modulos as $modulo)
							<tr>
								<td>{{ $modulo->ModNombre }}</td>
								<td>{{ $modulo->ModDescripcion }}</td>
								<td>{{ $modulo->ModDuracion }}</td>
								<td>{{ $modulo->ModPrecio }}</td>
								<td>
									@if ($modulo->ModEstado = 1)
										<span class="glyphicon glyphicon-ok"></span>
									@endif
								</td>
								<td>
									<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
									<a class="btn btn-warning" href="{{ URL::to('modulos/' . $modulo->id . '/edit') }}">Editar</a>
				
									<a class="btn btn-danger" href="{{ URL::to('usuarios/delete/' . $modulo->id ) }}">Eliminar</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
	
</div>

@stop
