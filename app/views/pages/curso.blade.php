@extends('layouts.base')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Especialista en Ofimática
                    <small>Curso Programado</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li><a href="{{URL::to('/catalogo')}}">Catálogo de Cursos</a>
                    </li>
                    <li class="active">Preinscripción</li>
                </ol>
            </div>

        </div>

<div class="row">
	<div class="col-md-8">
		{{ Form::open(array('url' => 'usuarios/create')) }}
		<form class="form-horizontal" role="form">
			<div class="col-sm-12">
				<label class="col-sm-4">INGRESA TUS DATOS:</label>
			</div>
			<div class="form-group">
				<label for="inputDNI" class="col-sm-2 control-label">{{ Form::label('dni', 'DNI') }}</label>
				<div class="col-sm-4">
					{{ Form::text('Ingrese DNI', Input::old('pkpersona'), array('class' => 'form-control')) }}
				  </div>
				<label for="inputEmail" class="col-sm-2 control-label">{{ Form::label('email', 'Email') }}</label>
				<div class="col-sm-4">
					{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
				</div>
			</div>
			  <div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">{{ Form::label('nombres', 'Nombres') }}</label>
				<div class="col-sm-4">
				  <input type="text" class="form-control" id="inputName" placeholder="Ingrese su Nombre">
				</div>
				<label for="inputLastName" class="col-sm-2 control-label">{{ Form::label('apellidos', 'Apellidos') }}</label>
				<div class="col-sm-4">
				  <input type="text" class="form-control" id="inputLastName" placeholder="Ingrese su Apellido">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-2 control-label">{{ Form::label('cel', 'Celular') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputCel" placeholder="###-######">
				</div>
				<label for="inputTel" class="col-sm-2 control-label">{{ Form::label('tel', 'Teléfono') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputTel" placeholder="###-######">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputCel" class="col-sm-2 control-label">{{ Form::label('frecuencia', 'Frecuencia') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputCel" placeholder="###-######">
				</div>
				<label for="inputTel" class="col-sm-2 control-label">{{ Form::label('hora', 'Horario') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputTel" placeholder="###-######">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputCel" class="col-sm-2 control-label">{{ Form::label('perfil', 'Perfil') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputCel" placeholder="###-######">
				</div>
				<label for="inputTel" class="col-sm-2 control-label">{{ Form::label('interes', 'Nivel de Interes') }}</label>
				<div class="col-sm-4">
				  <input type="phone" class="form-control" id="inputTel" placeholder="###-######">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Deseo que envie información a mi email.
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					{{ Form::submit('Crear Usuario!', array('class' => 'btn btn-primary')) }}
				  <button type="submit" class="btn btn-default">Registrar</button>
				</div>
			  </div>
			</form>

{{ Form::close() }}
		
                                
	</div>

            <div class="col-md-4">
                <h3>Descripción del Curso</h3>
                <p>Lpiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Contenido del Curso</h3>
                <ul>
                    <li>Windows</li>
                    <li>Word</li>
                    <li>Excel</li>
                    <li>Internet</li>
                    <li>PowerPoint</li>
                    <li>Access</li>
                    <li>Publisher</li>
                </ul>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Cursos Relacionados</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>
        </div>
        
            <!-- the comment box -->
		<div class="well">
			<h4>Deja tu Comentario:</h4>
			<form role="form">
				<div class="form-group">
					<textarea class="form-control" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
		
    </div>
    <!-- /.container -->
@stop
