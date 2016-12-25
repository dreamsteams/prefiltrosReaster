@extends('templates.master')

@section('content-main')
 <main>
    <div class="container">
    	<section id="home">
        <div class="row wow fadeIn">
            <div class="col-md-12">
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-2" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-2" data-slide-to="2" class="active"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view hm-black-slight">
                                <img src="packages/assets/media/images/secciones/fondo5.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                            <!--Caption-->
                            <div class="carousel-caption">
                                <div class="animated fadeIn">
                                    <h3 class="h3-responsive">New Fall / Winter handbags</h3>
                                    <p>Take a look at our Trends and prepare for Fall Season</p>
                                </div>
                            </div>
                            <!--Caption-->
                        </div>
                        <!--/First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view hm-black-light">
                                <img src="packages/assets/media/images/secciones/fondo6.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                            <!--Caption-->
                            <div class="carousel-caption">
                                <div class="animated fadeIn">
                                    <h3 class="h3-responsive">Best sweaters for winter</h3>
                                    <p>Choose your favourite one and you're never be cold</p>
                                </div>
                            </div>
                            <!--Caption-->
                        </div>
                        <!--/Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item active">
                            <!--Mask color-->
                            <div class="view hm-black-strong">
                                <img src="packages/assets/media/images/secciones/fondo4.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                            <!--Caption-->
                            <div class="carousel-caption">
                                <div class="animated fadeIn">
                                    <h3 class="h3-responsive">New arrivals for summer</h3>
                                    <p>Go for holidays with our shirts and sunglasses</p>
                                </div>
                            </div>
                            <!--Caption-->
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->

                    <!--Controls-->
                    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
        </div>
        </section>
        <hr class="between-sections"></hr>
        <section class="section" id="sct-about">
        	<div class="divider-new wow fadeInUp">
            	<h2 class="h2-responsive">¿Qué es Prefiltros?</h2>
        	</div>
        	<div class="row">
        		<div class="col-md-6">
        			<iframe width="560" height="315" src="https://www.youtube.com/embed/kJciqnkS3NU" frameborder="0" allowfullscreen class="wow fadeInLeft"></iframe>
        		</div>
        		<div class="col-md-6">
        			<div class="about wow fadeInRight">	
        				<div class="row">
        					<div class="col-md-4"></div>
        					<div class="col-md-4">
        						<img src="packages/assets/media/images/prefiltros/prefiltros.png" class="img-about">
        					</div>
        				</div>
        				<p class="section-description wow fadeIn text-justify">Somos una empresa mexicana, ubicada en la ciudad de Torreón Coahuila. Especializada en el cuidado de la Admisión de Motores. Ofreciendo repuestos, aditamentos y nuevas tecnologías en el cuidado de los motores en maquinaria diésel. Nuestro objetivo es reducir los costos de reparaciones provocados por el mal mantenimiento o problemas de contaminantes nocivos para los motores y ayudarlos a desempeñar el mejor rendimiento. Contamos con una gran variedad de productos de las mejores marcas para sus necesidades de filtración.</p>
        			</div>
        		</div>
        	</div>
        </section>
    </div>
     <div class="streak streak-lg hm-black-strong streak-photo view" style="background-image:url('packages/assets/media/images/secciones/fondo3.jpg')">
		<div class="mask flex-center pattern-1">
			<ul class="white-text smooth-scroll wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
				<li><h2 class="h2-responsive"><i class="fa fa-quote-left" aria-hidden="true"></i> Agrega los productos que necesites a tu carrito y solicita una cotización <i class="fa fa-quote-right" aria-hidden="true"></i></h2></li>
				<li><h5 class="text-xs-center font-italic wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">~ Prefiltros</h5></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<section class="section">
			<div class="divider-new">
        		<h2 class="h2-responsive">Nuestros productos</h2>
    		</div>
    	<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating btn-small primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating btn-small primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="0"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                        <li class="primary-color active" data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(21).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Shoes</h5>
                                        <h4 class="card-title"><strong><a href="">White sneakers</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">69$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(22).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Jeans</h5>
                                        <h4 class="card-title"><strong><a href="">Slim jeans</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">99$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(24).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Shorts</h5>
                                        <h4 class="card-title"><strong><a href="">Denim shorts</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci sed velit.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">49$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(29).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Accessories</h5>
                                        <h4 class="card-title"><strong><a href="">Summer hat</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">39$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(30).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Shoes</h5>
                                        <h4 class="card-title"><strong><a href="">Black high heels</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci sed velit.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">79$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(31).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Outerwear</h5>
                                        <h4 class="card-title"><strong><a href="">Black jacket</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">149$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item active">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(35).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Accessories</h5>
                                        <h4 class="card-title"><strong><a href="">Gold earrings</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci sed velit.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">29$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(3).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Accessories</h5>
                                        <h4 class="card-title"><strong><a href="">Black leather belt</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">89$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                            <div class="col-md-4 hidden-sm-down">

                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(12).jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>Shoes</h5>
                                        <h4 class="card-title"><strong><a href="">Converse sneakers</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="left">129$</span>
                                            <span class="right">
                                <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                </span>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                        </div>
                        <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                </div>
		</section>
		<hr class="between-sections"></hr>
		<section class="section mb-3 mt-4">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Nuestras categorías:</h1>
                <!--Section sescription-->

                <!--Carousel Wrapper-->
                <div id="carousel-example-1" class="carousel testimonial-carousel slide carousel-fade wow fadeIn" data-wow-delay="0.3s" data-ride="carousel" data-interval="false" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar">
                                    <img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%2820%29.jpg" class="rounded-circle img-fluid">
                                </div>
                                <!--Content-->
                                <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>

                                <h4>Anna Deynah</h4>
                            </div>

                        </div>
                        <!--/First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar">
                                    <img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%2817%29.jpg" class="rounded-circle img-fluid">
                                </div>
                                <!--Content-->
                                <p><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                                <h4>Maria Kate</h4>
                            </div>

                        </div>
                        <!--/Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar">
                                    <img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%2818%29.jpg" class="rounded-circle img-fluid">
                                </div>
                                <!--Content-->
                                <p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium , totam rem aperiam, eaque ipsa quae ab illo.</p>

                                <h4>John Doe</h4>
                            </div>

                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->

                    <!--Controls-->
                    <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->

            </section>
            <hr class="between-sections"></hr>
            <section class="section mb-4">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Contactactanos</h1>
                <!--Section sescription-->
                <p class="section-description mb-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Nos interasa tu opinión, si tienes alguna duda o comentario en esta sección podrás dejar tu comentario, así como también encontrar nuestra ubicación y datos relevantes para que nos puedas contactar.</p>

                <div class="row">

                    <!--First column-->
                    <div class="col-lg-5 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <!--Form with header-->
                        <div class="card">

                            <div class="card-block">
                                <!--Header-->
                                <div class="form-header" style="background-color: #072e6e">  
                                    <h3><i class="fa fa-envelope"></i> Escribenos:</h3>
                                </div>

                                <p>Si tienes alguna duda o comentarios nos puesdes dejar tu opinión.</p>
                                <br>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form3" class="form-control">
                                    <label for="form3">Tu nombre</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Tu email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-tag prefix"></i>
                                    <input type="text" id="form32" class="form-control">
                                    <label for="form32">Asunto</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="form8" class="md-textarea"></textarea>
                                    <label for="form8">Mensaje</label>
                                </div>

                                <div class="text-xs-center">
                                    <button class="btn waves-effect waves-light" style="background-color: #072e6e;">Enviar</button>
                                </div>

                            </div>

                        </div>
                        <!--/Form with header-->

                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-7 col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">

                        <!--Google map-->
                        <div class="z-depth-1-half map-container">
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.5769121868493!2d-103.43304068539692!3d25.55246638373221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdbc99dc6bd0f%3A0x91d95b921ca171d6!2sPre-Filtros!5e0!3m2!1ses-419!2smx!4v1482653555421" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <br>
                        <!--Buttons-->
                        <div class="row text-xs-center">
                            <div class="col-md-4">
                                <a class="btn-floating btn-small waves-effect waves-light" style="background-color: #072e6e ;"><i class="fa fa-map-marker"></i></a>
                                <p>Torreón, Coahuila CP 27000</p>
                                <p>Av. Álvares 400 #505</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating btn-small waves-effect waves-light" style="background-color: #072e6e ;"><i class="fa fa-phone"></i></a>
                                <p>+52 (871) 713-02-12</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating btn-small waves-effect waves-light" style="background-color: #072e6e ;"><i class="fa fa-envelope"></i></a>
                                <p>contacto@prefiltros.com.mx</p>
                                <p>prefiltros@outlook.com</p>
                            </div>
                        </div>

                    </div>
                    <!--/Second column-->

                </div>

            </section>
	</div>
</main>
@stop