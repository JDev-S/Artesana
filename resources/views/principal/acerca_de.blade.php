@extends('welcome')
@section('contenido')

		<main>
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-image-src="images/page-info-bg.jpg">
				<div class="section-header">
					<h1 class="text-white">Acerca de </h1>
					<span>~ Conocenos ~</span>
				</div>
			</section>
			
			<!-- ABOUT US -->
			<section class="about-us">
				<div class="container">
					<div class="about-us-wrapper set-bg" data-image-src="images/about-us-bg.png">
						<img src="images\about-us-1.jpg" alt="" class="about-us-1">
						<div class="about-us-board">
							<div class="inner">
								<div class="heading">
				  					<h2>Nuestra historia</h2>
					  				<img src="images\border-5.png" alt="" class="border-place">
				  				</div>
				  				<div class="body">
				  					<p>Panaderia con excelente producto con ingredientes de primera calidad. Empresa 100 % Mexicana que abre sus puertas en Salamanca, Gto.</p>
					  				<div class="end">
										<img src="images\signature-2.png" alt="">
										<div class="name">
											<h6>
												<a href="#">Jonathan Yepez Padrón</a>
											</h6>
											<span>Propietario de LA ARTESANA</span>
										</div>
									</div>
				  				</div>
							</div>
						</div>
						<img src="images\about-us-2.jpg" alt="" class="about-us-2">
					</div>
				</div>
			</section>

			<!-- OUR BEST SERVICE -->
		    <section class="section-primary our-service pb-120">
				<div class="container">
					<div class="section-header">
						<h2 class="text-white">Nuestros servicios</h2>
						<!--<span>~ Experiences on food ~</span>-->
					</div>		
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="our-service-col">
								<h3>- Buffet -</h3>
								<img src="images\serve-white-icon.png" alt="">
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="our-service-col">
								<h3>- Platillos a la carta -</h3>
								<img src="images\fresh-food-white-icon.png" alt="">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="our-service-col mb-md-0">
								<h3>- Bebidas-</h3>
                                <img src="images\coffee-white-icon.png" alt="">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="our-service-col mb-0">
								<h3>- Reposteria -</h3>
								<img src="images\coffee-white-icon.png" alt="">
								<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							</div>
						</div>
					</div>		
		    	</div>		    	
		    </section>

		    <!-- ABOUT US -->
			<!--<section class="section-primary about-us pt-150 pb-120">
				<div class="container">
					<div class="row">
						<div class="col-md-6 pr-md-0">
							<div class="image-holder">
								<img src="images\about-us-3.jpg" alt="">
							</div>
						</div>
						<div class="col-md-6 pl-md-0">
							<div class="about-us-col">
								<div class="section-header">
									<h2>About us</h2>
									<span class="fifth-color">~ For more add ~</span>
								</div>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum.</p>
								<a href="about-us.html" class="au-btn__readmore">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</section>-->

			<!-- PARTNER -->
		    <div class="container">
		    	<div class="partner has-bd">
					<div class="row justify-content-between">
			    		<div class="col-6 col-lg-auto text-center">
			    			<a href="#" class="image-holder">
					    		<img src="images\partner-2.png" alt="" class="wow zoomIn" data-wow-delay="0.3s">
					    	</a>
			    		</div>
			    		<div class="col-6 col-lg-auto text-center">
			    			<a href="#" class="image-holder">
					    		<img src="images\partner-3.png" alt="" class="wow zoomIn" data-wow-delay="0.5s">
					    	</a>
			    		</div>
			    		<div class="col-6 col-lg-auto text-center">
			    			<a href="#" class="image-holder">
					    		<img src="images\partner-4.png" alt="" class="wow zoomIn" data-wow-delay="0.7s">
					    	</a>
			    		</div>
			    		<div class="col-6 col-lg-auto text-center">
			    			<a href="#" class="image-holder">
					    		<img src="images\partner-5.png" alt="" class="wow zoomIn" data-wow-delay="0.9s">
					    	</a>
			    		</div>
			    	</div>		
		    	</div>
		    </div>

		</main>

@stop