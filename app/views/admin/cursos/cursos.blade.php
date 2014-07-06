@extends('layouts.base')

@section('content')
<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Módulo de Cursos
                    <small>Gestión de Cursos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('cursos')}}">Listar Cursos</a>
                    </li>
                    <li class="active">Registrar Curso</li>
                </ol>
            </div>
		</div>

<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all() )}}

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				{{ Form::open(array('url' => 'preinscritos/create')) }}
				<div class="form-group">
					{{ Form::label('cod', 'Código (Módulo-Orden-Curso)') }}
					{{ Form::text('cod', Input::old('cod'), array('class' => 'form-control','placeholder'=>'Ingrese el código del Curso. Ej. OF-01-WIN')) }}
				</div>
				<div class="form-group">
					{{ Form::label('nomb', 'Nombre') }}
					{{ Form::text('nomb', Input::old('nombre'), array('class' => 'form-control','placeholder'=>'Ingrese el Nombre del Curso')) }}
				</div>
				<div class="form-group">
					<label class="control-label" for="title">Descripción</label>
					<textarea class="form-control" rows="3" name="observaciones" id="observaciones" placeholder="Resumen del Curso, pequeña descripción del temario">{{{ Input::old('descripcion') }}}</textarea>
				</div>
				<div class="form-group">
					{{ Form::label('modulo', 'Asignar Módulo') }}
					{{ Form::select('modulocombo',$modulocombo, array(1), array('class' => 'form-control')) }}
				</div>				
				<div class="form-group">
					{{ Form::label('precio', 'Precio') }}
					S/. {{ Form::text('dur', Input::old('duracion'), array('class' => 'form-control','placeholder'=>'Ingrese el precio, ej. 250')) }}
				</div>
				{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Resetear', array('class'=>'btn btn-default'))}}
				{{ Form::close() }}
			</div>

			<div class="col-lg-8">
				<div class="pull-right">
					{{$cursos->links()}}
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Módulo</th>
							<th>Precio</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cursos as $curso)
							<tr>
								<td>{{ $curso->PK_Curso }}</td>
								<td>{{ $curso->CurNombre }}</td>
								<td>{{ Modulo::find($curso->t_modulo_id)->ModNombre }}</td>
								<td>{{ $curso->ModPrecio }}</td>
								<td>
									@if ($curso->CurEstado = 1)
										<span class="glyphicon glyphicon-ok"></span>
									@endif
								</td>
								<td>
									<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
									<a class="btn btn-warning" href="{{ URL::to('usuarios/' . $curso->id . '/edit') }}">Editar</a>
				
									<a class="btn btn-danger" href="{{ URL::to('usuarios/delete/' . $curso->id ) }}">Eliminar</a>
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
