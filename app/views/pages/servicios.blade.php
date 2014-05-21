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
                <h2>Laboratorios de Última Generación</h2>
                <p>This is a great place to introduce your company or project and describe what you do. This about page features general company information, employee bios, and other helpful elements.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>

        </div>
		
    </div>
    <!-- /.container -->
@stop
