@extends('welcome')
@section('contenido')

		<main id="contact-us-page">
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-image-src="/images/page-info-bg-1.jpg">
				<div class="section-header">
					<h1 class="text-white">Contacto</h1>
					<span>~ More than you know ~</span>
				</div>
			</section>

			<!-- CONTACT US -->
			<section class="contact-us section-primary">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-us-content">
								<h3>Encantados de escucharte</h3>
								<p>¡Sería genial saber de ti! Si tiene alguna pregunta, no dude en enviarnos un mensaje. ¡Esperamos tener noticias suyas! Respondemos las 24 horas!.</p>
								<div class="contact-us-row row">
									<div class="col-md-6">
										<div class="contact-us-col">
											<h5>México</h5>
											<div class="body">
												<div class="address">
													<span>Naranjos 220, Bellavista,</span>
													<span>Salamanca, Gto.</span>
												</div>
												<div class="contact-info">
													<a href="#">Email: <span class="__cf_email__" data-cfemail="bdd6dcc9d5cfc4d390848ffdd8c5dcd0cdd1d893ded2d0">artesa@gmail.com</span></a>
													<a href="tel:8494904283">Teléfono: 464 126 9311</a>
												</div>
											</div>
										</div>
									</div>
									<!--<div class="col-md-6">
										<div class="contact-us-col">
											<h5>Barcelona</h5>
											<div class="body">
												<div class="address">
													<span>184 Main Collins Street West 8007</span>
													<span>Barselona 23765</span>
												</div>
												<div class="contact-info">
													<a href="#">Email: <span class="__cf_email__" data-cfemail="8de6ecf9e5fff4e3a0b4bfcde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</span></a>
													<a href="tel:8494904283">Phone: (849) 490 4283</a>
												</div>
											</div>
										</div>
									</div>-->
								</div>
								<div class="social">
									<a href="#">
										<i class="zmdi zmdi-twitter"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-facebook-box"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-linkedin"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-instagram"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact-us-form">
								<form method="POST" action={{route('contact')}}>
                                    {{ csrf_field() }}
									<div class="form-holder">
										<input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required="">
									</div>
									<div class="form-holder">
										<input type="text" class="form-control" placeholder="Número teléfonico" name="telefono">
									</div>
									<div class="form-holder">
										<textarea class="form-control" placeholder="Escribir mensaje" name="mensaje" required=""></textarea>
									</div>
									<button class="au-btn round has-bg medium au-btn--hover">Enviar mensaje</button>
								</form>
							</div>
						</div>
					</div>				
				</div>
			</section>

			<!-- MAP -->
			<!--<div class="js-google-map" data-makericon="/images/map-marker.png" data-makers='[["Royate", "Now that you visited our website,<br> how about checking out our office too?", 40.715681, -74.003427]]'>
				<!--<div class="map__holder js-map-holder map-holder" id="map"></div>-->
                <div>
                <iframe frameborder="0" style="border:0" width="100%" height="800px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDEdsq6YzeLi6-XTHgI5c5hTkN9C68ZCrc&q=place_id:ChIJV6DSkdmELIQRIL2TDZmP5I4" allowfullscreen=""></iframe>
                
			</div>
		</main>

@stop