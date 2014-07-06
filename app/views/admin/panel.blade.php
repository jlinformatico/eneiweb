@extends('layouts.base')

@section('content')
<div class="container">
	<h3>Bienvenid@ al Panel de Administración</h3>
	<h5>Usuario: {{ Auth::user()->persona->PeNombre.' '.Auth::user()->persona->PeApellidoPaterno.' '.Auth::user()->persona->PeApellidoMaterno; }} - {{ Auth::user()->tipousuarios->TipoUsuNombre; }}</h5>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <strong><i class="glyphicon glyphicon-briefcase"></i> Subsistemas</strong>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ URL::to('preinscritos/') }}"><i class="glyphicon glyphicon-tasks"></i> Sistema de Preinscripciones</a></li>
                <li><a href="{{ URL::to('preinscritos/') }}"><i class="glyphicon glyphicon-tasks"></i> Sistema de Aula Virtual</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Configuración</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Estadísticas</a></li>
            </ul>
            <hr>
        </div>
        <div class="col-md-9">
            <strong><i class="glyphicon glyphicon-briefcase"></i> Módulos</strong>
             <hr>
              <div class="row">
                <div class="col-xs-6 col-md-12">
                    <a href="{{ URL::to('modulos/') }}" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Cursos</a>
                    <a href="{{ URL::to('grupos/') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-th"></span> <br/>Grupos</a>
                    <a href="{{ URL::to('usuarios/') }}" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Usuarios</a>
                    <a href="{{ URL::to('preinscritos/') }}" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-map-marker"></span> <br/>Visitas</a>
                    <a href="{{ URL::to('preinscritos/') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Clientes</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Noticias</a>
                    <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-book"></span> <br/>Reportes</a>
                    <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-envelope"></span> <br/>Mensajes</a>
                </div>
                </div>
             <br>
             <br>
                <a target="_blank" href="{{ URL::to('/') }}" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Ir a la Website</a>
        </div>
    </div>
    <br>
    <br>
     <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Porfavor recuerde <a href="{{ URL::to('/logout') }}">Cerrar Sesión</a> por seguridad de su cuenta.
        </div>
    <br>
</div>
@stop
