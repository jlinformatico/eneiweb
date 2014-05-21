@extends('layouts.base')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Cursos Programados
                    <small>Mes de Marzo</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Catálogo de Cursos</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>Especialista en Ofimática</strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">S/.250
                            <span class="price-cents">.00</span>
                            <span class="price-month">Inicio: 17 de Marzo</span>
                        </h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">5 meses</li>
                        <li class="list-group-item">Lun-Mie-Vie - 4:00pm - 6:20pm</li>
                        <li class="list-group-item">No hay costo de matrícula</li>
                        <li class="list-group-item">Incluye certificado</li>
                        <li class="list-group-item">114 horas académicas</li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{URL::to('/curso')}}">Preinscríbete!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>Especialista en Excel</strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">S/.250
                            <span class="price-cents">.00</span>
                            <span class="price-month">soles</span>
                        </h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">4 meses</li>
                        <li class="list-group-item">10 GB of Storage</li>
                        <li class="list-group-item">Up to 250 Users</li>
                        <li class="list-group-item">25 GB Bandwidth</li>
                        <li class="list-group-item">Security Suite</li>
                        <li class="list-group-item"><a class="btn btn-primary">Preinscríbete!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <strong>SPSS Básico<span class="label label-success">Nuevo!</span></strong>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title price">S/.100
                            <span class="price-cents">.00</span>
                            <span class="price-month">soles</span>
                        </h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">1 mes</li>
                        <li class="list-group-item">50 GB of Storage</li>
                        <li class="list-group-item">Up to 1000 Users</li>
                        <li class="list-group-item">100 GB Bandwidth</li>
                        <li class="list-group-item">Security Suite</li>
                        <li class="list-group-item"><a class="btn btn-primary">Preinscríbete!</a>
                        </li>
                    </ul>
                </div>
            </div>
		</div>
		
		        <hr>

        <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /.container -->
    
@stop
