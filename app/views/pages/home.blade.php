@extends('layouts.base')

@include('layouts.slider')

@section('content')
   <div class="container">

        <hr>

        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <h2>Capacitación con Calidad Educativa</h2>
                <p>El INEI, a través la Escuela Nacional de Estadística e Informática,ofrece servicios de capacitación especializada y entrenamiento que se adecuan a las necesidades del Sistema Estadístico Nacional (SEN) y publico en general contribuyendo directamente en la mejora de la productividad. Nuestro propósito es contribuir al desarrollo de las personas y empresas, generando ventajas competitivas a través de la adecuada utilización de las Tecnologías de la Información.</p>
                <p><a class="btn btn-default btn-large" href="#">Leer más &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-4">
                <h2>Visítanos</h2>
                <address>
                    <strong>Facebook ENEI-TACNA</strong>
                    <br>Informes e Inscripciones en:
                    <br>Av. San Martín 520 - Cercado
                    <br>
                </address>
                <address>
                    <abbr title="Phone">Teléfono:</abbr>(052) 245 195
                    <br>
                    <abbr title="Email">Email:</abbr> <a href="mailto:#">enei.tacna@gmail.com</a>
                </address>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive text-center" src="img/aula_v.png">
                <h2>Laboratorios Modernos</h2>
                <p>La Escuela Nacional de Estadística e Informática del INEI - Tacna, cuenta con laboratorios de última generación, actualizado con las herramientas informáticas y estadísticas que son de gran importancia dentro del ámbito laboral.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="img/excel_corporativo.png">
                <h2>Sistema de Aula Virtual</h2>
                <p>Dispone de herramientas para comunicarse entre alumno y docente, tanto de forma inmediata como en diferido. Entre otras características, permite poner a disposición de todos materiales didácticos en formato digital, además de información y seguimiento de su curso.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="img/cursos_e.png">
                <h2>Cursos Especializados</h2>
                <p>La participación en  los cursos especiales de la ENEI, garantiza calidad y un alto nivel de  conocimientos  y de  buenas prácticas en Laboratorio, debido que  se cuenta con importantes ventajas académicas  y de información estadística actualizada , para la toma de las decisiones  en el ámbito público y privado.</p>
            </div>
        </div>

    <div class="section">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<h2>Cursos de Computación a costos sociales</h2>
                    <hr>
                </div>
         
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->
    
    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Especialista en Ofimática</h2>
                    <ul>
                        <li>Básico Windows</li>
                        <li>Word</li>
                        <li>Excel</li>
                        <li>Power Point</li>
                        <li>Internet</li>
                        <li>Access</li>
                        <li>Publisher</li>
                        <li>Realizará cualquier <strong>trabajo con documentos digitales</strong> usando word como herramienta profesional</li>
                        <li>Realizará cualquier cálculo, representar gráficamente datos con Excel!</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="img/oempresarial.png">
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="img/excel_avanzado.png">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Especialista en Excel</h2>
                    <ul>
                        <li>Conceptos básicos</li>
                        <li>Funciones de Excel</li>
                        <li>SUMAR, BUSCAR, PROMEDIO, CONTAR</li>
                        <li>Proteger libros, hoja crear rangos</li>
                        <li>Generar gráficos estadísticos</li>
                        <li>Base de Datos</li>
                        <li>Creación de Tablas, definir formato de datos</li>
                        <li>Funciones para base de datos</li>
                        <li>FILTROS AVANZADOS</li>
			                        <li>TABLAS DINÁMICAS</li>
                        <li>CREACIÓN DE MACROS</li>
                        <li>Funciones <strong>Financieras</strong> TASA, INT.EFECTIVO, VAN, TIR</li>
                        <li>Soluciones usando la función Solver!</li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->
    
       <div class="container">
        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>Preinscríbete en los cursos especializados que brinda el ENEI</h4>
                <p>Para más información de los contenidos de cada curso especializado, vea nuestro catálogo!</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="{{URL::to('/catalogo')}}">Ver Catálogo de Cursos</a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop
