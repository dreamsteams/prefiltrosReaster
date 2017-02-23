<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="keywords" content="prefiltros,motores,torreon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/packages/assets/media/images/prefiltros/prefiltros.png">
    <title>@yield('title')</title>
    <!-- Zona de archivos de estilo -->
    {{HTML::style('packages/libs/mdb/css/bootstrap.min.css')}}
    {{HTML::style('packages/libs/font-awesome-4.7.0/css/font-awesome.min.css')}}
  	{{HTML::style('packages/libs/mdb/css/mdb.min.css')}}
    {{HTML::style('packages/libs/mdb/css/style.css')}}
    {{HTML::style('packages/assets/css/main.css')}}
    {{HTML::style('packages/assets/css/preload.css')}}
     <link rel="stylesheet" href="/packages/libs/sweetalert2/sweetalert2.min.css">
  	@yield('css')
  </style>
</head>
<body class="intro-page blue-skin">
    <div id="mdb-preloader" class="flex-center">
        <div id="preloader-markup">
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>
        </div>
        <div id="log-information">
            <img src="/packages/assets/media/images/prefiltros/prefiltros.png" class="img-fluid img-preload">
            <div class="text-center">
                <h2>Bienvenido a prefiltros</h2>
                <h5>Cargando...</h5>
            </div>
        </div>
    </div>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav top-nav-collapse">
            <button type="button" class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
                <i class="fa fa-bars" role="button" style="color:white"></i>
            </button>
                    <!-- icon navbar -->
            <a href="/" class="float-lg-left" style="display:block"><img src="/packages/assets/media/images/prefiltros/prefiltros1.png" class="img-fluid img-nav-icon"></a>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn breadcrumb-nav hidden-lg-down">
                @yield('migas')
            </div>
            <div class="collapse navbar-toggleable-md" id="collapseEx2">
            
            <ul class="nav navbar-nav float-xs-left  float-sm-left float-md-left float-lg-right">
                <li class="nav-item ancla">
                    <a href="#sct-home" class="nav-link waves-effect waves-light"> <i class="fa fa-home"></i> <span class="">Inicio</span></a>
                </li>
                <li class="nav-item ancla">
                    <a href="#sct-about" class="nav-link waves-effect waves-light"><i class="fa fa-users"></i> <span class="">Nosotros</span></a>
                </li>
                <li class="nav-item ancla">
                    <a href="#sct-productos" class="nav-link waves-effect waves-light"> <i class="fa fa-gift"></i> <span class="">Prodcutos</span></a>
                </li>
                <li class="nav-item ">
                    <a href="/productos" class="nav-link waves-effect waves-light"><i class="fa fa-shopping-basket"></i> <span class="">Catalogo</span></a>
                </li>
                <li class="nav-item ancla">
                    <a href="#sct-categories" class="nav-link waves-effect waves-light"><i class="fa fa-cubes"></i> <span class="">Categorías</span></a>
                </li>
                <li class="nav-item ">
                    <a href="/carrito" class="nav-link waves-effect waves-light"> <span class="tag red z-depth-1 txt-car-qty">2</span> <i class="fa fa-shopping-cart"></i> <span class="">Carrito</span></a>
                </li>
                <li class="nav-item ancla">
                    <a href="#sct-contact" class="nav-link waves-effect waves-light"><i class="fa fa-envelope"></i> <span class="">Contacto</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="">Administrador</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        @if(Auth::check())
                            <a class="dropdown-item waves-effect waves-light" href="/logout">Cerrar session</a>
                        @else
                            <a class="dropdown-item waves-effect waves-light" data-target="#modal-login" data-toggle="modal">Iniciar sesion</a>
                        @endif
                    </div>
                </li>
            </ul>
            </div>

        </nav>
        <!--/.Navbar-->
    </header>
        <!-- Modal de login -->
    <div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content borderRounded">
                <!--Header-->
                <div class="modal-header" style="background-color:#072e6e">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="title-header" style="color:white"><i class="fa fa-user-circle"></i> Iniciar Sesión</h3>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row fadeIn animated">
                                <div class="col-md-5">
                                    <center>
                                        <img src="/packages/assets/media/images/prefiltros/prefiltros.png" alt="..." class="rounded-circle img-fluid" style="width:70%;">
                                    </center>
                                    <hr>
                                    <p class="text-xs-center"><i class="fa fa-quote-left"></i>Iniciar session como administrador</p>
                                </div>
                                <div class="col-md-7" id="form-content">
                                    <div class="row">
                                        <form id="frm-login">
                                            <div class="md-form">
                                                <i class="fa fa-user prefix"></i>
                                                <input type="text" id="username" class="form-control" name="username">
                                                <label for="username">Usuario</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="password" class="form-control" name="password">
                                                <label for="password">Contraseña</label>
                                            </div>
                                            <div class="text-xs-center">
                                                <button type="submit" class="btn btn-success btn-lg btn-block borderRounded" id="btnLogin">Iniciar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- / Modal de login -->
   @yield('content-main')
    <!-- Footer de la página -->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-lg-3 offset-lg-1">
                    <h5 class="title social-section-title text-center">Encuentranos también en redes sociales</h5>
                    <!-- Social Links -->
                    <div class="social-section text-md-left">
                        <ul class="text-xs-center">
                            <!-- Facebook -->
                            <li><a href="http://www.facebook.com/pages/PREFILTROS-Y-ACCESORIOS-PARA-LA-ADMISION-PARA-<br />
MAQUINARIA-DIESEL/117117421719097" class="btn-floating btn-small btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a></li>
                            <!-- Instagram -->
                            <li><a class="btn-floating btn-small btn-ins waves-effect waves-light"><i class="fa fa-instagram"></i></a></li>
                            <!-- Twitter -->
                            <li><a href="http://www.twitter.com/prefiltros" class="btn-floating btn-small btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a></li>
                            <!--Youtube-->
                            <li><a href="http://www.youtube.com/user/PREFILTROS?feature=mhee" class="btn-floating btn-small btn-yt waves-effect waves-light"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.Social Links -->
                </div>
                <!--/.First column-->


                <!--Second column-->
                <div class="col-lg-2">
                 
                </div>
                <!--/.Second column-->
                
                <!-- Fourth column -->
                <div class="col-lg-5">
                    <h5 class="title text-center">Nuestras marcas</h5>

                        <ul class="instagram-photos">
                            @foreach(marca::where("active",'=',1)->get() as $marca)
                                <li>
                                    <div class="view overlay hm-white-slight">
                                        <img class="img-fluid" src="packages/assets/media/images/marcas/{{$marca->imagen}}" alt="Instagram photo cap">
                                        <a href="#">
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                </li> 
                            @endforeach
                        </ul>
                    
                </div>
                <!-- /.Fourth column -->
            </div>
        </div>
        <!--/.Footer Links-->
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © {{date('Y')}} Compañía: <a href="http://prefiltros.supernovaprueba.com/"> www.prefiltros.com </a>
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!-- // fin del footer -->
 <!-- Zona de archivos js -->
    {{HTML::script('packages/libs/mdb/js/jquery-3.1.1.min.js')}}
    {{HTML::script('packages/libs/mdb/js/bootstrap.min.js')}}
    {{HTML::script('packages/libs/mdb/js/mdb.min.js')}}
    {{HTML::script('packages/libs/mdb/js/tether.min.js')}}
    {{HTML::script('packages/assets/js/app-master.js')}}
    {{HTML::script('packages/libs/validation/jquery.validate.min.js')}}
    {{HTML::script('packages/libs/validation/additional-methods.min.js')}}
    {{HTML::script('packages/libs/validation/localization/messages_es.js')}}
    {{HTML::script('packages/assets/js/main.js')}}
    {{HTML::script('packages/assets/js/prefiltros.js')}}
    <script type="text/javascript" src="/packages/libs/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="/packages/libs/moment/moment.js"></script>
    <script type="text/javascript" src="/packages/libs/moment/lang/messages_es.js"></script>
    @yield('js')
<!--/.Navbar-->
</body>
</html>
