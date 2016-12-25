<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="keywords" content="prefiltros,motores,torreon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="packages/assets/media/images/prefiltros/prefiltros.png">
    <title>@yield('title')</title>
    <!-- Zona de archivos de estilo -->
    {{HTML::style('packages/libs/mdb/css/bootstrap.min.css')}}
    {{HTML::style('packages/libs/font-awesome-4.7.0/css/font-awesome.min.css')}}
  	{{HTML::style('packages/libs/mdb/css/mdb.min.css')}}
    {{HTML::style('packages/libs/mdb/css/style.css')}}
    {{HTML::style('/packages/libs/sweetalert/sweetalert.css')}}
    {{HTML::style('packages/assets/css/main.css')}}
    {{HTML::style('packages/assets/css/preload.css')}}
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
            <img src="packages/assets/media/images/prefiltros/prefiltros.png" class="img-fluid img-preload">
            <div class="text-center">
                <h2>Bienvenido a prefiltros</h2>
                <h5>Cargando...</h5>
            </div>
        </div>
    </div>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav top-nav-collapse">
            
            <!-- icon navbar -->
            <a href="/" class="inline-block pull-left"><img src="packages/assets/media/images/prefiltros/prefiltros.png" class="img-fluid img-nav-icon"></a>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn breadcrumb-nav">
                <p><i class="fa fa-home"></i> Pagina de inicio</p>
            </div>


            <ul class="nav navbar-nav float-xs-right">

                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light"> <span class="tag red z-depth-1">2</span> <i class="fa fa-shopping-cart"></i> <span class="hidden-sm-down">Cart</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Register</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-effect waves-light" href="#">Logout</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->
    </header>
   @yield('content-main')
    <!-- Footer de la página -->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-lg-4 offset-lg-1">
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
                    <h5 class="title">Horarios</h5>
                    <ul>
                        <li><a href="#">Lunes - Viernes </a></li>
                        <li><a href="#">9:00am - 6:00pm</a></li>
                        <li><a href="#">Sabado - Domingo </a></li>
                        <li><a href="#">11:00am - 5:00pm </a></li>
                        
                    </ul>
                </div>
                <!--/.Second column-->
                
                <!-- Fourth column -->
                <div class="col-lg-4">
                    <h5 class="title text-center">Nuestras marcas</h5>

                        <ul class="instagram-photos">
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(5).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(10).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(6).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(3).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            
                            <div class="hidden-md-down no-height"><br></div>
                            
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(1).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(2).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(9).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="view overlay hm-white-slight">
                                    <img class="img-fluid" src="http://mdbootstrap.com/images/avatars/img%20(7).jpg" alt="Instagram photo cap">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </li>
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
    {{HTML::script('packages/libs/validation/jquery.validate.min.js')}}
    {{HTML::script('packages/libs/validation/additional-methods.min.js')}}
    {{HTML::script('packages/libs/validation/localization/messages_es.js')}}
    {{HTML::script('packages/assets/js/main.js')}}
    <script>
        
        //Animation init
        new WOW().init();

    </script>
    @yield('js')
<!--/.Navbar-->
</body>
</html>