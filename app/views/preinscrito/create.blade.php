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

	<div class="row">
		<div class="col-lg-12">
			{{ Form::open(array('url' => 'preinscritos/create')) }}
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('dni', 'DNI') }}
					{{ Form::text('dni', Input::old('dni'), array('class' => 'form-control','placeholder'=>'Ingrese su DNI')) }}
				</div>
				<div class="form-group">
					{{ Form::label('nombre', 'Nombres') }}
					{{ Form::text('nombrepersona', Input::old('nombrepersona'), array('class' => 'form-control','placeholder'=>'Ingrese su Nombre')) }}
				</div>
				<div class="form-group">
					{{ Form::label('apelpat', 'Apellido Paterno') }}
					{{ Form::text('apellidopaterno', Input::old('apellidopaterno'), array('class' => 'form-control','placeholder'=>'Ingrese su Apellido Paterno')) }}
				</div>
				<div class="form-group">
					{{ Form::label('apelmat', 'Apellido Materno') }}
					{{ Form::text('apellidomaterno', Input::old('apellidomaterno'), array('class' => 'form-control','placeholder'=>'Ingrese su Apellido Materno')) }}
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
					{{ Form::select('perfilcombo', $perfilcombo, array(1), array('class' => 'form-control')) }}
				</div>
				
				{{ HTML::script('/js/jquery.ui.datepicker-es.js') }}
				<script src="{{ URL::asset('/js/jquery.ui.datepicker-es.js') }}"></script>
				<div class="form-group">
					{{ Form::label('birthday', 'Fecha de Nacimiento') }}
						<input type="text" class="form-control" name="dateofbirth" id="dateofbirth" placeholder="Pulse aquí" value="{{ Input::old('dateofbirth') }}">
						<script>
							$(function() {
								$.datepicker.setDefaults($.datepicker.regional["es"]);
								$( "#dateofbirth" ).datepicker({
									changeMonth: true,
									changeYear: true,
									yearRange: "-20:+0",
									dateFormat: "yy-mm-dd",
								});
							});
						</script>
				</div>
				
				<div class="form-group">
					{{ Form::label('Sexo', 'Sexo') }}
					{{ Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'), Input::old('sexo'), array('class' => 'form-control')) }}
				</div>
				
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					{{ Form::label('tel', 'Teléfono') }}
					{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control','placeholder'=>'Teléfono ###-######')) }}
				</div>
				<div class="form-group">
					{{ Form::label('cel', 'Celular') }}
					{{ Form::text('celular', Input::old('celular'), array('class' => 'form-control','placeholder'=>'Celular +51-### ######')) }}
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'email@email.com')) }}
				</div>
				<!--
				<div class="form-group">
					{{ Form::label('disponibilidad', 'Disponibilidad (Frecuencia-Horario)') }}
					{{ Form::select('disponibilidad', array('0' => 'Seleccione Disponibilidad', '1' => 'LUN-MIE-VIE, Mañana 09:00am', '2' => 'LUN-MIE-VIE, Tardes', '3' => 'LUN-MIE-VIE, Noches', '4' => 'MAR-JUE, Mañana', '5' => 'MAR-JUE, Tardes', '6' => 'SABADOS, Mañana', '7' => 'SABADOS, Tardes'), Input::old('disponibilidad'), array('class' => 'form-control')) }}
				</div> -->
				<div class="form-group">
					{{ Form::label('disponibilidad', 'Disponibilidad (Frecuencia-Horario)') }}
					{{ Form::select('dispcombo', $dispcombo, array(1), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('direccion', 'Zona de Procedencia') }}
					{{ Form::select('direccion', array('0' => 'Selecciona Locacion', 'Cercado de Tacna' => 'Cercado de Tacna', 'G.A.' => 'Distrito Gregorio Albarracin', 'Alto de la Alianza' => 'Distrito Alto de la Alianza', 'Pocollay' => 'Distrito Pocollay', 'Ciudad Nueva' => 'Distrito Ciudad Nueva', 'Otra provincia' => 'Otra Provincia'), Input::old('direccion'), array('class' => 'form-control')) }}
				</div>
				<div class="form-group">
					{{ Form::label('obs', 'Observaciones') }}
					{{ Form::text('observaciones', Input::old('observaciones'), array('class' => 'form-control','placeholder'=>'Ingrese algunas observaciones')) }}
				</div>
			</div>

			<div class="col-lg-4">
				<h2>Instrucciones</h2>
				<h5>En este módulo haremos las preinscripciones.</h5>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">
				{{ Form::submit('Registrar', array('class' => 'btn btn-primary')) }}
				{{Form::reset('Resetear', array('class'=>'btn btn-default'))}}
			{{ Form::close() }}
			</div>
		</div>
	</div>

</div>

@stop
