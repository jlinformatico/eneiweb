@extends('layouts.base')

@section('content')
<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Gestión de Preinscritos
                    <small>Registrar Preinscrito</small>
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

<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all() )}}

	{{ Form::open(array('url' => 'preinscritos/create')) }}
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('dni', 'DNI') }}
					{{ Form::text('dni', Input::old('dni'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('nombre', 'Nombres') }}
					{{ Form::text('nombrepersona', Input::old('nombrepersona'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('apelpat', 'Apellido Paterno') }}
					{{ Form::text('apellidopaterno', Input::old('apellidopaterno'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('apelmat', 'Apellido Materno') }}
					{{ Form::text('apellidomaterno', Input::old('apellidomaterno'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('curso', 'Curso de Interes') }}
					{{ Form::select('modulocombo[]',$modulocombo, array(1), array('class' => 'form-control')) }}
				</div>
				<!--
				<div class="form-group">
					{{ Form::label('interes', 'Nivel de Interes') }}
					{{ Form::select('nivel_interes', array('0' => 'Seleccione Nivel', '1' => 'Muy Interesado', '2' => 'Interesado', '3' => 'Poco Interesado'), Input::old('nivel_interes'), array('class' => 'form-control')) }}
				</div> --->
				<div class="form-group">
					{{ Form::label('interes', 'Nivel de Interes') }}
					{{ Form::select('nivel_interes', array('Seleccione Nivel','Muy Interesado','Interesado','Poco Interesado'), Input::old('nivel_interes'), array('class' => 'form-control')) }}
				</div>
				
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('tel', 'Teléfono') }}
					{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('cel', 'Celular') }}
					{{ Form::text('celular', Input::old('celular'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
				</div>
				<!--
				<div class="form-group">
					{{ Form::label('disponibilidad', 'Disponibilidad (Frecuencia-Horario)') }}
					{{ Form::select('disponibilidad', array('0' => 'Seleccione Disponibilidad', '1' => 'LUN-MIE-VIE, Mañana 09:00am', '2' => 'LUN-MIE-VIE, Tardes', '3' => 'LUN-MIE-VIE, Noches', '4' => 'MAR-JUE, Mañana', '5' => 'MAR-JUE, Tardes', '6' => 'SABADOS, Mañana', '7' => 'SABADOS, Tardes'), Input::old('disponibilidad'), array('class' => 'form-control')) }}
				</div> -->
				<div class="form-group">
					{{ Form::label('disponibilidad', 'Disponibilidad (Frecuencia-Horario)') }}
					{{ Form::select('disponibilidad', array('Seleccione Disponibilidad','LUN-MIE-VIE, Mañana 09:00am','LUN-MIE-VIE, Tardes','LUN-MIE-VIE, Noches','MAR-JUE, Mañana','MAR-JUE, Tardes','SABADOS, Mañana','SABADOS, Tardes'), Input::old('disponibilidad'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('direccion', 'Zona de Procedencia') }}
					{{ Form::select('direccion', array('0' => 'Selecciones Locacion', '1' => 'Cercado de Tacna', '2' => 'Distrito Gregorio Albarracin', '3' => 'Distrito Alto de la Alianza', '4' => 'Distrito Pocollay', '5' => 'Distrito Ciudad Nueva', '6' => 'Otra Provincia'), Input::old('direccion'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('obs', 'Observaciones') }}
					{{ Form::text('observaciones', Input::old('observaciones'), array('class' => 'form-control')) }}
				</div>
			</div>
			
			<div class="col-lg-4">
				<h2>Instrucciones</h2>
				<h5>En este módulo haremos las preinscripciones.</h5>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-12">
			{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
			</div>			
		</div>
	</div>

</div>

@stop
