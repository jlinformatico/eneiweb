@extends('layouts.base')

@section('content')

<div class="container">

<!-- Menu de Opciones del Modulo -->
		<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Usuarios del Sistema
                    <small>Registrar Usuario</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/paneladmin')}}">Panel</a>
                    </li>
                    <li><a href="{{URL::to('usuarios')}}">Listar Usuarios</a>
                    </li>
                    <li class="active">Registro de Usuario</li>
                </ol>
            </div>

		</div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> Perfil de {{ $user->persona->PeNombre.' '.$user->persona->PeApellidoPaterno.' '.$user->persona->PeApellidoMaterno }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{URL::to('usuarios')}}"
                       class="btn btn-primary">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Regresar
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Avatar</strong></td>
                    <td>Foto</td>
                </tr>
                <tr>
                    <td><strong>Nombres</strong></td>
                    <td>{{ $user->persona->PeNombre }}</td>
                </tr>
                <tr>
                    <td><strong>Apellidos</strong></td>
                    <td>{{ $user->persona->PeApellidoPaterno.' '.$user->persona->PeApellidoMaterno }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $user->persona->PeEmail }}</td>
                </tr>
                <tr>
                    <td><strong>Fecha de Registro</strong></td>
                    <td>{{ $user->persona->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Dirección</strong></td>
                    <td>{{ $user->persona->PeDireccion }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@stop
