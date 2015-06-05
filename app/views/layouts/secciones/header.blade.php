<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <span><a class="navbar-brand" href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i> Inicio ENEI Tacna</a></span>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{URL::to('/catalogo')}}">Cursos</a>
                    </li>
                    <li><a href="{{URL::to('/servicios')}}">Servicios</a>
                    </li>
                    <li><a href="#">Contacto</a>
                    </li>
			<li><a href="#">Aula Virtual</a>
                    </li>
                    <li class="dropdown">
					@if(Auth::check())
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->PeNombre }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::to('/paneladmin')}}"><i class="fa fa-dashboard fa-fw"></i> Mi Panel</a>
                            </li>
                            <li><a href="{{URL::to('/paneladmin')}}"><i class="fa fa-wrench fa-fw"></i> Configuraciones</a>
                            </li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                            </li>
                        </ul>
					@else
						<li><a href="{{URL::to('/login')}}">Iniciar Sesión</a>
						</li>
					@endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
