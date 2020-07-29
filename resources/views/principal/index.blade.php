@extends('welcome')
@section('contenido')


<main>

    <!-- SLIDE SHOW -->
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider" data-version="5.4.5">
            <ul>
                <li data-transition="">
                    <img src="\images\slideshow-1.jpg" class="rev-slidebg" alt="">

                    <!--<div class="tp-caption tp-resizeme caption-1" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="middle" data-fontsize="['72', '70', '65', '60', '60']" data-voffset="['-43.5','-57', '-54', '-97', '-100']" data-textalign="center" data-lineheight="inherit" data-color="#cdaa7c">
					        	Experience the food
							</div>-->

                    <!--<div class="tp-caption tp-resizeme caption-2" data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="middle" data-voffset="['47.5', '34', '37', '-6', '-9']" data-fontsize="['20', '20', '20', '20', '25']" data-lineheight="inherit" data-color="#ccc">
								Wish you have good food at our restaurant
							</div>-->

                    <!--<a href="reservation_v1.html" class="tp-caption tp-resizeme caption-btn au-btn round au-btn--hover" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:20px;opacity:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="middle" data-voffset="['146.5', '133', '136', '93', '90']" data-fontsize="['15', '18', '19',  '20', '25']" data-lineheight="inherit" data-width="['172', '182', '190', '200', '252']" data-height="['42', '42', '50', '50', '65']" data-paddingtop="1" data-color="#fff">
								Booking now
							</a>-->

                    <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-ytid="CoAvaYOwm6k" data-videoattributes="version=3&enablejsapi=1&html5=1&hd=1&wmode=opaque&showinfo=0&rel=0&
     						origin=http://www.youtube.com/" data-videopreload="auto" data-videorate="1" data-forcecover="1" data-videoloop="loopandnoslidestop" data-aspectratio="16:9" data-videostartat="00:00" data-autoplay="on" data-autoplayonlyfirsttime="true">
                    </div>
                    <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/8SbUC-UaAxE" frameborder="0" allow="accelerometer; autoplay=1; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                </li>
            </ul>
        </div>
    </div>

    <!-- WELCOME TO ROYATE -->
    <section class="welcome section-primary">
        <div class="container">
            <div class="section-header">
                <h2>Bienvenidos a LA ARTESANA</h2>
                <!--<span>~ Luxury & Quality ~</span>-->
            </div>
            <div class="row">
                @foreach($platillos as $platillo)
                <div class="col-md-6 col-lg-4">
                    <div class="post">
                        <div class="post-thumb">
                            <a href="/info_platillo?platillo={{$platillo->id_alimento}}">
                                <img src='{{$platillo->fotografia_miniatura}}' alt="img_fotografia">
                            </a>

                        </div>
                        <div class="post-body has-border bg-1">
                            <h5>
                                <a href="/info_platillo?platillo={{$platillo->id_alimento}}">
                                   {{$platillo->nombre_alimento}}
                                </a>
                            </h5>
                            <p>{{$platillo->descripcion}}.</p>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- OUR MENU -->
    <section class="our-menu section-primary pb-113">
        <div class="container">
            <div class="section-header">
                <h2 class="text-white">Menu la Artesana</h2>
                <span>~ Observe lo que nosotros ofrecemos ~</span>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="our-menu-col left">
                        <div class="heading">
                            <h3>Escanea el QR</h3>
                        </div>
                        <img src="/images/qr.jpeg" width="450px" height="450px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our-menu-col right">
                        <div class="heading" style="margin-bottom: 0px;">
                            <h3>Menu en fisico</h3>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/images/1.jpg" width="500px" height="500" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/2.jpg" width="500px" height="500" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/3.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/4.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/5.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/6.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/7.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/8.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/9.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/10.jpg" width="500px" height="500" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE -->
    <!--<section class="section-primary pt-150 pb-120 feature">
    			<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="\images\feature.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="feature-content">
								<div class="heading">
									<h3>
										<a href="shop-single.html">Beef steak with green</a>
									</h3>
									<span class="price">
										<span>$</span>45
									</span>
								</div>
								<div class="body">
									<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
									<div class="star-rating">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									</div>
									<!-- OWL-CAROUSEL 
									<div class="feature-slider">
										<div class="owl-carousel owl-theme style" id="feature-carousel">
										    <div class="item">
										    	<div class="feature-small">
													<a href="shop-single.html">
														<img src="images\feature-small-1.png" alt="">
													</a>
													<div class="item-info">
														<h6>
															<a href="shop-single.html">Salat banana flower</a>
														</h6>
														<span class="price">
															<span>$</span>40
														</span>
													</div>
												</div>
										    </div>
										    <div class="item">
										    	<div class="feature-small">
													<a href="shop-single.html">
														<img src="images\feature-small-2.png" alt="">
													</a>
													<div class="item-info">
														<h6>
															<a href="shop-single.html">Beef steak with red</a>
														</h6>
														<span class="price">
															<span>$</span>56
														</span>
													</div>
												</div>
										    </div>
										    <div class="item">
										    	<div class="feature-small">
													<a href="shop-single.html">
														<img src="images\feature-small-3.png" alt="">
													</a>
													<div class="item-info">
														<h6>
															<a href="shop-single.html">Classic Linguini Fini</a>
														</h6>
														<span class="price">
															<span>$</span>37
														</span>
													</div>
												</div>
										    </div>
										    <div class="item">
										    	<div class="feature-small">
													<a href="shop-single.html">
														<img src="images\feature-small-4.png" alt="">
													</a>
													<div class="item-info">
														<h6>
															<a href="shop-single.html">Salat banana flower</a>
														</h6>
														<span class="price">
															<span>$</span>50
														</span>
													</div>
												</div>
										    </div>
										</div>
										<!-- NAVIGATION BUTTON 
									    <span class="lnr lnr-chevron-left" id="feature-prev"></span>
									    <span class="lnr lnr-chevron-right" id="feature-next"></span>
									</div>
								</div>
							</div>
						</div>
					</div>		
    			</div>
		    </section>-->

    <!-- BOOK A TABLE -->
    <!-- <section class="booking">
		    	<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 px-0">
							<div class="image-holder"></div>
						</div>
						<div class="col-md-6 px-0">
							<div class="booking-content">
								<div class="section-header">
									<h2 class="text-white">Book a table</h2>
									<span>~ Check out our place ~</span>
								</div>
								<form method="get">
									<div class="form-row fix-lg">
										<div class="form-col">
											<div class="select">
				                                <div class="form-holder">
				                                    <div class="form-control">1 people</div>
				                                    <span class="lnr lnr-chevron-down"></span>
				                                </div>
				                                <ul class="dropdown">
				                                    <li data-value="1 people">1 people</li>
				                                    <li data-value="2 people">2 people</li>
				                                    <li data-value="3 people">3 people</li>
				                                    <li data-value="4 people">4 people</li>
				                                    <li data-value="5 people">5 people</li>
				                                    <li data-value="6 people">6 people</li>
				                                    <li data-value="7 people">7 people</li>
				                                    <li data-value="8 people">8 people</li>
				                                    <li data-value="9 people">9 people</li>
				                                    <li data-value="10 people">10 people</li>
				                                </ul>
				                            </div>
										</div>
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" placeholder="Date">
			                                    <span class="lnr lnr-calendar-full big"></span>
			                                </div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control time-picker" placeholder="Time">
			                                    <span class="lnr lnr-clock big"></span>
			                                </div>
										</div>
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control" placeholder="Name">
			                                </div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control" placeholder="Phone">
			                                </div>
										</div>
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control" placeholder="Email">
			                                </div>
										</div>
									</div>
									<div class="btn-holder">
										<button class="au-btn has-bg au-btn--hover round">Book now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
		    	</div>
		    </section>-->

    <!-- LATEST NEWS -->
    <section class="section-primary pb-120">
        <div class="container">
            <div class="section-header">
                <h2>Nuevos platillos</h2>
                <!--<span>~ Great articles ~</span>-->
            </div>
            <div class="row">
                @foreach($nuevos as $nuevo)
                <div class="col-md-6 col-lg-4">
                    <div class="post">
                        <div class="post-thumb">
                            <a href="/info_platillo?platillo={{$nuevo->id_alimento}}">
                                <img src="{{$nuevo->fotografia_miniatura}}" alt="">
                            </a>

                        </div>
                        <div class="post-body has-border bg-1">
                            <h5>
                                <a href="/info_platillo?platillo={{$nuevo->id_alimento}}">
                                    {{$nuevo->nombre_alimento}}
                                </a>
                            </h5>
                            <p>{{$nuevo->descripcion}}.</p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>


@stop
