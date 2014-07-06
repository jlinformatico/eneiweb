@extends('layouts.base')

@section('content')

<div class="container">
<!-- Menu de Opciones del Modulo -->
	<div class="row">
		
		<div class="col-lg-12">
			<h1 class="page-header">Gestión de Notificaciones
				<small>Notificar al Cliente</small>
            </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('preinscritos')}}">Listar Preinscritos</a>
                    </li>
                    <li class="active">Notificación</li>
                </ol>
            </div>
		</div>
</div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Visita N° {{ $detalle->t_visita_id }} realizada por <strong>{{ Cliente::find($detalle->visita->t_cliente_id)->persona->PeNombre.' '.Cliente::find($detalle->visita->t_cliente_id)->persona->PeApellidoPaterno.' '.Cliente::find($detalle->visita->t_cliente_id)->persona->PeApellidoMaterno }}</strong> el {{ $detalle->created_at }}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Módulo de Interés</strong></td>
                    <td>{{Modulo::find($detalle->t_modulo_id)->ModCertificado.' ('.Modulo::find($detalle->t_modulo_id)->ModDuracion.' meses) - S/.'.Modulo::find($detalle->t_modulo_id)->ModPrecio}} nuevos soles</td>
                </tr>
                <tr>
                    <td><strong>Datos de Contacto</strong></td>
                    <td>{{ Cliente::find($detalle->visita->t_cliente_id)->persona->PeCelular.' - '.Cliente::find($detalle->visita->t_cliente_id)->persona->PeTel.' - '.Cliente::find($detalle->visita->t_cliente_id)->persona->PeEmail }}</td>
                </tr>
                <tr>
                    <td><strong>Disponibilidad</strong></td>
                    <td>{{ Disponibilidad::find($detalle->t_disponibilidad_id)->DispNombre }}, su nivel de Interes es: <strong>{{ Perfil::find($detalle->t_perfil_id)->PerNombre }}</strong></td>
                </tr>
                </tbody>
            </table>
    <h1>
		<small>Registrar Notificación</small>
    </h1>
    <div class="row">
		<div class="col-lg-12">
			{{ Form::open(array('url' => '/preinscritos/'.$detalle->id)) }}
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('notificacion', 'Tipo de Notificacion') }}
					{{ Form::select('noticombo', $noticombo, array(1), array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('estado', 'Estado') }}
					{{ Form::select('estado', array('No Contesto' => 'No Contestó', 'Contesto' => 'Contestó'), Input::old('estado'), array('class' => 'form-control')) }}
				</div>
			</div>

			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('obs', 'Observaciones') }}
					<textarea class="form-control" rows="2" name="observaciones" id="observaciones" placeholder="Por si el cliente menciono algo a considerar">{{{ Input::old('observaciones') }}}</textarea>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Resetear', array('class'=>'btn btn-default'))}}
				{{ Form::close() }}
			</div>
		</div>
	</div>
	
	<hr>
	
		@if(count($detalle->notificaciones) > 0)
		<strong>Historial de Notificaciones</strong>
			<table class="table table-striped">
					<thead>
						<tr>
							<th>Usuario</th>
							<th>Tipo Notificación</th>
							<th>Fecha de Notificación</th>
							<th>Estado</th>
							<th>Observaciones</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($detalle->notificaciones as $notificacion)
							<tr>
								<td>{{ Usuario::find($notificacion->t_usuario_id)->persona->PeNombre }}</td>
								<td>{{ TipoNotificacion::find($notificacion->t_tipo_notificacion_id)->TnotNombre }}</td>
								<td>{{ $notificacion->created_at }}</td>
								<td>{{ $notificacion->NotEstado }}</td>
								<td>{{ $notificacion->NotObservacion }}</td>
								<td>
									<!-- editar usuario (uses the edit method found at GET /usuarios/{id}/edit -->
									<a class="btn btn-warning" href="{{ URL::to('usuarios/' . $notificacion->id . '/edit') }}">Editar</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		@else
			<div class="alert alert-danger">No hay notificaciones realizadas</div>
		@endif
		
        </div>
    </div>

</div>

@stop
