@extends('layouts.base')

@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		    <div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Sistema de Preinscripciones y Notificaciones</h3>
                </div>
		        <div class="panel-body">
		            {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
		            @if(Session::has('mensaje_sesion'))
		                <div class="alert alert-danger">{{ Session::get('mensaje_sesion') }}</div>
		            @endif
		            {{ Form::open(array('url' => '/login')) }}
		                <legend>Iniciar sesión</legend>
		                <div class="form-group">
		                    {{ Form::label('usuario', 'Nombre de usuario') }}
		                    {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
								<span class="help-block">{{ $errors->first('PK_Usuario') }}</span>
		                </div>
		                <div class="form-group">
		                    {{ Form::label('contraseña', 'Contraseña') }}
		                    {{ Form::password('password', array('class' => 'form-control')); }}
								<span class="help-block">{{ $errors->first('password') }}</span>
		                </div>
		                <div class="checkbox">
		                    <label>
		                        Recordar contraseña
		                        {{ Form::checkbox('rememberme', true) }}
		                    </label>
		                </div>
		                {{ Form::submit('Ingresar', array('class' => 'btn btn-lg btn-primary btn-block')) }}
		            {{ Form::close() }}
				</div>
		    </div>
		</div>
	</div>
</div>

@stop
