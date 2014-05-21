@extends('layouts.base')

@section('content')

<div class="container">

<!-- Menu de Opciones del Modulo -->
	<div class="row">

		<div class="col-lg-12">
			<h1 class="page-header">Gestión de Preinscritos
				<small>Grupos tentativos</small>
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

<h1>Perfil de {{ $user->persona->PeNombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user->persona->PeNombre.' '.$user->persona->PeApellidoPaterno.' '.$user->persona->PeApellidoMaterno }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->persona->PeEmail }}<br>
			<strong>Modulo:</strong> {{ $user->persona->PeDireccion }}
		</p>
	</div>

</div>

@stop
