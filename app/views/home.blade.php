@extends('templates.master')

@section('title')Bienvenido | Prefiltros @stop
@section('migas')
<p><i class="fa fa-home"></i> Pagina de inicio</p>
@stop
@section('content-main')
 <main>
    <div class="container">
    	<section id="sct-home">
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
                    <div class="embed-responsive embed-responsive-16by9 about">
        			    <iframe width="560" height="315" src="https://www.youtube.com/embed/kJciqnkS3NU" frameborder="0" allowfullscreen class="wow fadeInLeft embed-responsive-item"></iframe>
                    </div>
        		</div>
        		<div class="col-md-6">
        			<div class="about wow fadeInRight">	
        				<div class="row">
                            <div class="col-md-3"></div>
        					<div class="col-md-6">
        						<img src="packages/assets/media/images/prefiltros/prefiltros1.png" class="img-about hidden-sm-down">
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
		<section class="section" id="sct-productos">
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
                    <?php $productos = producto::getAll(9);$long = count($productos); $nPages = ceil($long/3) ?>
                    <ol class="carousel-indicators">
                        @for($i=0;$i<$nPages;$i++)
                            @if($i==0)
                                <li class="primary-color active" data-target="#multi-item-example" data-slide-to="{{($i)}}"></li>
                            @else
                                <li class="primary-color" data-target="#multi-item-example" data-slide-to="{{($i)}}"></li>
                            @endif
                        @endfor
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                    <?php $contador_pro=0; $control=0;?>
                        @foreach($productos as $producto)
                            @if($contador_pro == 0)
                                @if($productos[0]->id == $producto->id)
                                    <div class="carousel-item active">
                                @else
                                    <div class="carousel-item">
                                @endif
                            @endif
                             <div class="col-md-4">
                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="/packages/assets/media/images/productos/{{$producto->imagen}}" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-xs-center">
                                        <!--Category & Title-->
                                        <h5>{{$producto->categoria}}</h5>
                                        <h4 class="card-title"><strong><a href="">{{$producto->titulo}}</a></strong></h4>

                                        <!--Description-->
                                        <p class="card-text">{{$producto->descripcion}}.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <a class="btn bg-blue btn-car waves-effect waves-light" data-id="{{$producto->id}}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                        </div>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>
                            <?php $contador_pro+=1; $control+=1;?>
                            @if($contador_pro == 3 || $control == $long)
                                </div>
                                <?php $contador_pro=0;?>
                            @endif
                        @endforeach
                     

                    </div>
                    <!--/.Slides-->

                </div>
		</section>
		<hr class="between-sections"></hr>
		<section class="section mb-3 mt-4" id="sct-categories">
                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Nuestras categorías:</h1>
                <!--Section sescription-->
                <p class="section-description mb-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">En esta sección encontrarás las categorías de los productos con los que contamos</p>
                <!--Carousel Wrapper-->
                <div id="carousel-example-1" class="carousel testimonial-carousel slide carousel-fade wow fadeIn" data-wow-delay="0.3s" data-ride="carousel" data-interval="false" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <?php $id = marca::where('active','=','1')->get()[0]->id?>
                        @foreach(marca::where('active','=','1')->get() as $marca)
                        	@if($id== $marca->id)
	                        <div class="carousel-item active">
                            @else
                            <div class="carousel-item">
                            @endif
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar">
                                        <img src="packages/assets/media/images/marcas/{{$marca->imagen}}" class="img-fluid">
                                    </div>
                                    <!--Content-->
                                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>
                                    <h4>{{$marca->nombre}}</h4>
                                </div>

                            </div>
                        @endforeach
                        <!--/First slide-->
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
            <section class="section mb-4" id="sct-contact">

                <!--Section heading-->
                <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><i class="fa fa-pencil"></i> Escribenos</h1>
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
                        <div class="z-depth-3-half map-container">
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
                                <a class="btn-floating btn-small waves-effect waves-light" style="background-color: #1b926c ;"><i class="fa fa-whatsapp"></i></a>
                                <p> +52 87172927976</p>
                                <p><i class="fa fa-phone"></i>+52 (871) 713-02-12</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating btn-small waves-effect waves-light" style="background-color: #072e6e ;"><i class="fa fa-envelope"></i></a>
                                <p>info@prefiltros.com.mx</p>
                            </div>
                        </div>

                    </div>
                    <!--/Second column-->

                </div>

            </section>
	</div>
</main>
@stop
@section('js')
    <script type="text/javascript" src="/packages/assets/js/add-car.js"></script>
@stop