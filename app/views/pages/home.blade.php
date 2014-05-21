@extends('layouts.base')

@include('layouts.slider')

@section('content')
   <div class="container">

        <hr>

        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <h2>Capacítate</h2>
                <p>Here is where you will introduce visitors to the business. Make sure to use clear and informative sentences. Use appropriate keywords here to make sure search engines can find the business.</p>
                <p>When using this template, two decisions will be open to visitors. Decision one will be to use above-the-fold information to interact with the page. Decision two will be to scroll down and see the additional marketing boxes. Either way, the user will get the information they need!</p>
                <p><a class="btn btn-default btn-large" href="#">Leer más &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-4">
                <h2>Visítanos</h2>
                <address>
                    <strong>Facebook ENEI-TACNA</strong>
                    <br>Dale me gusta
                    <br>San Francisco, CA 94107
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">enei.tacna@gmail.com</a>
                </address>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive text-center" src="img/aula_v.png">
                <h2>Laboratorios de Ultima Generación</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="img/excel_corporativo.png">
                <h2>Sistema de Aula Virtual</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="img/cursos_e.png">
                <h2>Cursos especializados</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
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
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
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
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
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
