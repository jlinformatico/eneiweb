@extends('layouts.base')

@section('content')
<div class="container">
	<h1>Bienvenido {{ Auth::user()->name; }}</h1>
		{{ HTML::link('/logout', 'Cerrar sesión.') }}
	<h1>Accede a tu Panel de {{ Auth::user()->PK_Usuario; }}</h1>
		{{ HTML::link('/usuarios', 'Gestionar usuarios.') }}
	<h1>Accede al Módulo de Preinscripciones</h1>
		{{ HTML::link('/preinscritos', 'Gestionar preinscritos.') }}
</div>
@stop
