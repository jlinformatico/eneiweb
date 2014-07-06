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
                    <li class="active">Editar Módulo</li>
                </ol>
            </div>
		</div>

<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all() )}}

	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> Editar Módulo de <strong>{{ $modulo->ModNombre }}</strong></h3>
        </div>
			<div class="panel-body">
				<br>
				{{ Form::open(array('method' => 'POST', 'url' => '/modulos/'.$modulo->id.'/edit/', 'role' => 'form')) }}
				<div class="form-group">
					{{ Form::label('nombre', 'Denominación') }}
					{{ Form::text('nombre', $modulo->ModNombre, array('class' => 'form-control','placeholder'=>'Ingrese nombre del módulo. Ej. Ofimática','value'=>Input::old('nombre'))) }}
				</div>
				<div class="form-group">
					{{ Form::label('certificado', 'Certificación') }}
					{{ Form::text('certificado', $modulo->ModCertificado , array('class' => 'form-control','placeholder'=>'Ej. Especialista en Ofimática','value'=>Input::old('certificado'))) }}
				</div>
				<div class="form-group">
					<label class="control-label" for="title">Descripción</label>
					<textarea class="form-control" rows="3" name="descripcion" id="descripcion" placeholder="Resumen del Modulo, pequeña descripción">{{{ $modulo->ModDescripcion, Input::old('descripcion') }}}</textarea>
				</div>
				<div class="form-group">
					{{ Form::label('duracion', 'Duración (meses)') }}
					{{ Form::select('duracion', array('1' => '1 mes', '2' => '2 meses', '3' => '3 meses', '4' => '4 meses', '5' => '5 meses','6' => '6 meses'), $modulo->ModDuracion, array('class' => 'form-control')) }}
				</div>				
				<div class="form-group">
					{{ Form::label('precio', 'Precio') }}
					S/. {{ Form::text('precio', $modulo->ModPrecio , array('class' => 'form-control','placeholder'=>'Ingrese el precio, ej. 250.00')) }}
				</div>
				{{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
				<a href="{{ url('modulos') }}" class="btn btn-default">&nbsp;Cancelar</a>
				{{ Form::close() }}
			</div>
        </div>
    </div>
	
</div>

@stop
