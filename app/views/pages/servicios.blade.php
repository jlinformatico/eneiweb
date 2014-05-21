@extends('layouts.base')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Servicios
                    <small>Siempre innovando!</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Servicios</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/750x450">
            </div>
            <div class="col-md-6">
                <h2>Beneficios de estudiar en el ENEI</h2>
                <p>La capacitación que desarrolla la ENEI , asegura la calidad educativa, la cual considera en primer lugar , la eficacia, para lo cual consideramos que los participantes, aprenden aquello que está establecido en los planes y programas curriculares, la segunda es la calidad, que permite que se reciban los conocimientos necesarios, en forma práctica, para lo cual se cuenta con docentes calificados y con experiencia, materiales de estudio, estrategias didácticas, y bases de datos actualizadas.</p>
                <p>La preparación de los cursos se realiza en coordinación con el personal directamente involucrado en el área a capacitar. Para el diseño se puede tomar como base la programacion de cursos que la ENEI tiene, o puede elaborarse un temario totalmente nuevo que se estructura de acuerdo al plan de desarrollo del personal y el nivel de instrucción de los participantes.</p>
            </div>

        </div>
		
    </div>
    <!-- /.container -->
@stop
