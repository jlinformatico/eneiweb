@extends('layouts.base')

@section('content')
<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Módulo de Grupos
                    <small>Gestión de Grupos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('grupos')}}">Listar Grupos</a>
                    </li>
                    <li class="active">Registrar Grupo</li>
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
					{{ Form::label('cod', 'Código (Módulo-Grupo-Año)') }}
					{{ Form::text('cod', Input::old('cod'), array('class' => 'form-control','placeholder'=>'Ingrese el código del Grupo. Ej. OF-01-2014')) }}
				</div>
				<div class="form-group">
					{{ Form::label('modulo', 'Asignar Módulo') }}
					{{ Form::select('modulocombo',$modulocombo, array(1), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('fechinicio', 'Fecha de Inicio (día - mes)') }}
					{{ Form::text('fech', Input::old('fech'), array('class' => 'form-control','placeholder'=>'Ingrese la fecha de inicio, ej. 4 de Julio')) }}
				</div>
				<div class="form-group">
					{{ Form::label('frecuencia', 'Frecuencia - día(s)') }}
					{{ Form::text('frec', Input::old('frecuencia'), array('class' => 'form-control','placeholder'=>'Ingrese la frecuencia, ej. LUN-MIE-VIE')) }}
				</div>
				<div class="form-group">
					{{ Form::label('hor', 'Horario (00:00:00)') }}
					{{ Form::text('hor', Input::old('horario'), array('class' => 'form-control','placeholder'=>'Ingrese la frecuencia, ej. LUN-MIE-VIE')) }}
				</div>
				<div class="form-group">
					<label class="control-label" for="title">Observaciones</label>
					<textarea class="form-control" rows="3" name="observaciones" id="observaciones" placeholder="Observaciones del Grupo">{{{ Input::old('obs') }}}</textarea>
				</div>				
				{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Resetear', array('class'=>'btn btn-default'))}}
				{{ Form::close() }}
			</div>

			<div class="col-lg-8">
				<div class="pull-right">
					{{$grupos->links()}}
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Grupo</th>
							<th>Módulo</th>
							<th>Fecha Inicio</th>
							<th>Frecuencia</th>
							<th>Horario</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($grupos as $grupo)
							<tr>
								<td>{{ $grupo->PK_Grupo }}</td>
								<td>{{ Modulo::find($grupo->t_modulo_id)->ModNombre }}</td>
								<td>{{ $grupo->GruFechaInicio }}</td>
								<td>{{ $grupo->GruFrecuencia }}</td>
								<td>{{ $grupo->GruHoraInicial }}</td>
								<td>
									@if ($grupo->GruEstado = 1)
										<span class="glyphicon glyphicon-ok"></span>
									@endif
								</td>
								<td>
									<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
									<a class="btn btn-warning" href="{{ URL::to('usuarios/' . $grupo->id . '/edit') }}">Editar</a>
				
									<a class="btn btn-danger" href="{{ URL::to('usuarios/delete/' . $grupo->id ) }}">Eliminar</a>
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
