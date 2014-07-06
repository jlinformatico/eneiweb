<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
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
                    <li><a href="contact.php">Contacto</a>
                    </li>
					<li><a href="aulavirtual.php">Aula Virtual</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Iniciar Sesión<b class="caret"></b></a>
                        <ul class="dropdown-menu">
							<li><a href="{{URL::to('/login')}}">Acceder</a>
                            </li>
                            <li><a href="full-width.html">Mi Perfil</a>
                            </li>
                            <li><a href="{{URL::to('/logout')}}">Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
