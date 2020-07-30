<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>LA ARTESANA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="\fonts\linearicons\style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="\fonts\material-design-iconic-font\css\material-design-iconic-font.min.css">

	    <!-- BOOTSTRAP -->
	    <link rel="stylesheet" href="\vendor\bootstrap\bootstrap.min.css">

	    <!-- owl-carousel -->
	    <link rel="stylesheet" href="\vendor\owl-carousel\css\owl.carousel.min.css">
	    <link rel="stylesheet" href="\vendor\owl-carousel\css\owl.theme.default.min.css">

	    <!-- ANIMATE -->
	    <link rel="stylesheet" href="\css\animate.css">

	    <!-- DATE-PICKER -->
		<link rel="stylesheet" href="\vendor\date-picker\datepicker.min.css">
		
	    <!-- SLIDER REVOLUTION -->
        <link rel="stylesheet" type="text/css" href="\vendor\revolution-slider\css\layers.css">
        <link rel="stylesheet" type="text/css" href="\vendor\revolution-slider\css\navigation.css">
        <link rel="stylesheet" type="text/css" href="\vendor\revolution-slider\css\settings.css">
        @yield('styles')

        <!-- SIDENAV MOBILE -->
        <link rel="stylesheet" href="\vendor\hcmobilenav\demo.css">

        <!-- JQUERY TIME PICKER -->
        <link rel="stylesheet" href="\vendor\jquery-timepicker-master\jquery.timepicker.css">

		<!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.png">

	    <!-- STYLE CSS -->
	    <link rel="stylesheet" href="\css\style.css">
	</head>
	
	<body class="preload">

		<!-- PAGE LOADER -->
		<div class="images-preloader">
		    <div id="preloader" class="rectangle-bounce">
		        <span></span>
		        <span></span>
		        <span></span>
		        <span></span>
		        <span></span>
		    </div>
		</div>
		
		<header>
			<!-- HEADER ON DESKTOP -->
			<nav class="navbar-desktop">
				<div class="left">
					<a href="/" class="logo">
						<img src="\images\logo.png" alt="LA ARTESANA">
					</a>
				</div>
				<ul>
					<!--<li class="current has-children">-->
                    <li>
						<a href="/">
							Inicio
						</a>
						<!--<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li class="current">
										<a href="index.html">HomePage_v1</a>
									</li>
									<li>
										<a href="index-2.html">HomePage_v2</a>
									</li>
									<li>
										<a href="index-3.html">HomePage_v3</a>
									</li>
									<li>
										<a href="index-4.html">HomePage_v4</a>
									</li>
									<li>
										<a href="index-5.html">HomePage_v5</a>
									</li>
									<li>
										<a href="index-6.html">HomePage_v6</a>
									</li>
									<li>
										<a href="index-7.html">HomePage_v7</a>
									</li>
									<li>
										<a href="index-8.html">HomePage_v8</a>
									</li>
									<li>
										<a href="index-9.html">HomePage_v9</a>
									</li>
									<li>
										<a href="index-10.html">HomePage_v10</a>
									</li>
									<li>
										<a href="index-11.html">HomePage_v11</a>
									</li>
									<li>
										<a href="index-12.html">HomePage_v12</a>
									</li>
									<li>
										<a href="index-13.html">HomePage_v13</a>
									</li>
									<li>
										<a href="index-14.html">HomePage_v14</a>
									</li>
									<li>
										<a href="index-15.html">HomePage_v15</a>
									</li>
								</ul>
							</div>
						</div>-->
					</li>
					<!--<li class="has-children">
						<a href="#">
							Page
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="about-us.html">About Us</a>
									</li>
									<li>
										<a href="contact-us.html">Contact Us</a>
									</li>
									<li>
										<a href="coming-soon.html">Coming Soon</a>
									</li>
									<li class="has-children">
										<a href="gallery-three-columns.html">Gallery
											<i class="zmdi zmdi-chevron-right"></i>
										</a>
										<div class="sub-menu">
											<div class="wrapper">
												<ul>
													<li>
														<a href="gallery-three-columns.html">Three Colums</a>
													</li>
													<li>
														<a href="gallery-four-columns.html">Four Columns</a>
													</li>
													<li>
														<a href="gallery-three-columns-wide.html">Three Columns Wide</a>
													</li>
													<li>
														<a href="gallery-four-columns-wide.html">Four Colums Wide</a>
													</li>
													<li>
														<a href="masonry-grid.html">Masonry</a>
													</li>
													<li>
														<a href="masonry-wide.html">Masonry Wide</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<a href="project.html">Project</a>
									</li>
									<li>
										<a href="meet-the-chefs.html">Meet The Cheefs</a>
									</li>
									<li>
										<a href="404.html">404</a>
									</li>
								</ul>
							</div>
						</div>
					</li>-->
                    <li>
						<a href="/tienda">
							Tienda
						</a>
					</li>
                    
					<li>
						<a href="/acerca_de">
							Acerca de
						</a>
					</li>
                    
                    
                     <li>
						<a href="/contacto">
							Contacto
						</a>
					</li>
                    
					<!--<li class="has-children">
						<a href="#">
							Reservation
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="reservation_v1.html">Reservation_v1</a>
									</li>
									<li>
										<a href="reservation_v2.html">Reservation_v2</a>
									</li>
								</ul>
							</div>
						</div>
					</li>-->
					<!--<li class="has-children">
						<a href="#">
							Blog
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="blog-masonry.html">Blog Masonry</a>
									</li>
									<li>
										<a href="blog-masonry-wide.html">Blog Masonry Wide</a>
									</li>
									<li>
										<a href="blog-standard-right-sidebar.html">Blog Standard Right Sidebar</a>
									</li>
									<li>
										<a href="blog-standard-left-sidebar.html">Blog Standard Left Sidebar</a>
									</li>
									<li>
										<a href="blog-standard-no-sidebar.html">Blog Standard No Sidebar</a>
									</li>
									<li>
										<a href="blog-single.html">Blog Single</a>
									</li>
								</ul>
							</div>
						</div>
					</li>-->
					<!--<li class="has-children">
						<a href="#">
							Shop
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="shop-list.html">Shop List</a>
									</li>
									<li>
										<a href="shop-three-column.html">Three Columns Grid</a>
									</li>
									<li>
										<a href="shop-three-column-wide.html">Three Columns Wide</a>
									</li>
									<li>
										<a href="shop-four-column.html">Four Colums Grid</a>
									</li>
									<li>
										<a href="shop-four-column-wide.html">Four Colums Wide</a>
									</li>
									<li>
										<a href="shop-cart.html">Shop Cart</a>
									</li>
									<li>
										<a href="shop-single.html">Shop Single</a>
									</li>
									<li>
										<a href="sign-in.html">Sign In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="checkout.html">CheckOut</a>
									</li>
								</ul>
							</div>
						</div>
					</li>-->
				</ul>
				
				<div class="right">
					<div class="action">
						<div class="notify">
							<img src="\images\notify.png" alt="">
							<span class="notify-amount">4</span>
							
							<!-- WIDGET SHOPPING -->
							<div id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
								<div class="widget_shopping_cart_content">
									<ul class="woocommerce-mini-cart cart_list product_list_widget ">
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
											<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>					    
											<a href="#" class="image-holder">
												<img src="\images\widget-cart-thumb-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
												<span class="product-name">Best Brownies</span>
											</a>
											<span class="quantity"> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>18
												</span>
												x1
											</span>					
										</li>
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
											<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>					    
											<a href="#" class="image-holder">
												<img src="\images\widget-cart-thumb-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
												<span class="product-name">Angela's Awesome</span>
											</a>
											<span class="quantity"> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>28
												</span>
												x3
											</span>					
										</li>
									</ul>
									<p class="woocommerce-mini-cart__total total">
										<strong>Subtotal:</strong> 
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>102
										</span>
									</p>
									<p class="woocommerce-mini-cart__total total">
										<strong>Total:</strong> 
										<span class="woocommerce-Price-amount amount color-cdaa7c">
											<span class="woocommerce-Price-currencySymbol">$</span>102
										</span>
									</p>
									<p class="woocommerce-mini-cart__buttons buttons">
										<a href="/carrito_compras" class="button wc-forward view-cart">Ver carrito</a>
										<a href="/pagar" class="button checkout wc-forward">Ir a pagar</a>
									</p>
								</div>
							</div>
						</div>	
						<!--<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>-->
						<span class="lnr lnr-menu menu-sidebar-icon"></span>
					</div>
				</div>
			</nav>

			<!-- HEADER ON MOBILE -->
			<nav class="navbar-mobile">
				<div class="container">
					<div class="heading">
						<div class="left">
							<div class="navbar-mobile__toggler">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<a href="index.html" class="logo">
							<img src="images\logo.png" alt="Royate">
						</a>
						<div class="right">
							<div class="action">
								<div class="notify">
									<img src="images\notify.png" alt="">
									<span class="notify-amount">0</span>
					
									<!-- WIDGET SHOPPING -->
									<div class="widget woocommerce widget_shopping_cart">
										<div class="widget_shopping_cart_content">
											<ul class="woocommerce-mini-cart cart_list product_list_widget ">
												<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
													<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
														<span class="lnr lnr-cross-circle"></span>
													</a>					    
													<a href="#" class="image-holder">
														<img src="\images\widget-cart-thumb-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
														<span class="product-name">Best Brownies</span>
													</a>
													<span class="quantity"> 
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>18
														</span>
														x1
													</span>					
												</li>
												<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
													<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
														<span class="lnr lnr-cross-circle"></span>
													</a>					    
													<a href="#" class="image-holder">
														<img src="\images\widget-cart-thumb-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
														<span class="product-name">Angela's Awesome</span>
													</a>
													<span class="quantity"> 
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>28
														</span>
														x3
													</span>					
												</li>
											</ul>
											<p class="woocommerce-mini-cart__total total">
												<strong>Subtotal:</strong> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>102
												</span>
											</p>
											<p class="woocommerce-mini-cart__total total">
												<strong>Total:</strong> 
												<span class="woocommerce-Price-amount amount color-cdaa7c">
													<span class="woocommerce-Price-currencySymbol">$</span>102
												</span>
											</p>
											<p class="woocommerce-mini-cart__buttons buttons">
												<a href="#" class="button wc-forward view-cart">View cart</a>
												<a href="#" class="button checkout wc-forward">Checkout</a>
											</p>
										</div>
									</div>
								</div>	
								<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>
							</div>
						</div>
					</div>
				</div>
				<nav id="main-nav">
					<ul>
						<li class="current">
							<a href="/" target="_blank">Inicio</a>
							<!--<ul>
								<li class="current">
									<a href="index.html">HomePage_v1</a>
								</li>
								<li>
									<a href="index-2.html">HomePage_v2</a>
								</li>
								<li>
									<a href="index-3.html">HomePage_v3</a>
								</li>
								<li>
									<a href="index-4.html">HomePage_v4</a>
								</li>
								<li>
									<a href="index-5.html">HomePage_v5</a>
								</li>
								<li>
									<a href="index-6.html">HomePage_v6</a>
								</li>
								<li>
									<a href="index-7.html">HomePage_v7</a>
								</li>
								<li>
									<a href="index-8.html">HomePage_v8</a>
								</li>
								<li>
									<a href="index-9.html">HomePage_v9</a>
								</li>
								<li>
									<a href="index-10.html">HomePage_v10</a>
								</li>
								<li>
									<a href="index-11.html">HomePage_v11</a>
								</li>
								<li>
									<a href="index-12.html">HomePage_v12</a>
								</li>
								<li>
									<a href="index-13.html">HomePage_v13</a>
								</li>
								<li>
									<a href="index-14.html">HomePage_v14</a>
								</li>
								<li>
									<a href="index-15.html">HomePage_v15</a>
								</li>
							</ul>-->
						</li>
						<li>
							<a href="/tienda">
								Tienda
							</a>
							<!--<ul>
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<a href="contact-us.html">Contact Us</a>
								</li>
								<li>
									<a href="coming-soon.html">Coming Soon</a>
								</li>
								<li>
									<a href="#">Gallery</a>
									<ul>
										<li>
											<a href="gallery-three-columns.html">Three Colums</a>
										</li>
										<li>
											<a href="gallery-four-columns.html">Four Columns</a>
										</li>
										<li>
											<a href="gallery-three-columns-wide.html">Three Columns Wide</a>
										</li>
										<li>
											<a href="gallery-four-columns-wide.html">Four Colums Wide</a>
										</li>
										<li>
											<a href="masonry-grid.html">Masonry</a>
										</li>
										<li>
											<a href="masonry-wide.html">Masonry Wide</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="project.html">Project</a>
								</li>
								<li>
									<a href="meet-the-chefs.html">Meet The Cheefs</a>
								</li>
								<li>
									<a href="404.html">404</a>
								</li>
							</ul>-->
						</li>
						<li>
							<a href="/acerca_de">
								Acerca de
							</a>
						</li>
                        
                        <li>
							<a href="/contacto">
								Contacto
							</a>
						</li>
						<!--<li>
							<a href="#">
								Reservation
							</a>
							<ul>
								<li>
									<a href="reservation_v1.html">Reservation_v1</a>
								</li>
								<li>
									<a href="reservation_v2.html">Reservation_v2</a>
								</li>
							</ul>
						</li>-->
						<!--<li class="has-children">
							<a href="#">
								Blog
							</a>
							<ul>
								<li>
									<a href="blog-masonry.html">Blog Masonry</a>
								</li>
								<li>
									<a href="blog-masonry-wide.html">Blog Masonry Wide</a>
								</li>
								<li>
									<a href="blog-standard-right-sidebar.html">Blog Standard Right Sidebar</a>
								</li>
								<li>
									<a href="blog-standard-left-sidebar.html">Blog Standard Left Sidebar</a>
								</li>
								<li>
									<a href="blog-standard-no-sidebar.html">Blog Standard No Sidebar</a>
								</li>
								<li>
									<a href="blog-single.html">Blog Single</a>
								</li>
							</ul>
						</li>-->
						<!--<li class="has-children">
							<a href="#">
								Shop
							</a>
							<ul>
								<li>
									<a href="shop-list.html">Shop List</a>
								</li>
								<li>
									<a href="shop-three-column.html">Three Columns Grid</a>
								</li>
								<li>
									<a href="shop-three-column-wide.html">Three Columns Wide</a>
								</li>
								<li>
									<a href="shop-four-column.html">Four Colums Grid</a>
								</li>
								<li>
									<a href="shop-four-column-wide.html">Four Colums Wide</a>
								</li>
								<li>
									<a href="shop-cart.html">Shop Cart</a>
								</li>
								<li>
									<a href="shop-single.html">Shop Single</a>
								</li>
								<li>
									<a href="sign-in.html">Sign In</a>
								</li>
								<li>
									<a href="sign-up.html">Sign Up</a>
								</li>
								<li>
									<a href="checkout.html">CheckOut</a>
								</li>
							</ul>
						</li>-->
					</ul>
				</nav>
			</nav>
		
			<!-- MODAL SEARCH -->
			<div class="modal-search modal" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
						<form method="get">
							<input type="text" placeholder="Search">
							<button>
								<span class="lnr lnr-magnifier"></span>
							</button>
						</form>
		            </div>
		        </div>
		        <span class="lnr lnr-cross" data-toggle="modal" data-target="#modalSearch"></span>
			</div>
		
			<!-- MENU SIDEBAR -->
			<div class="menu-sidebar">
				<div class="close-btn">
					<span class="lnr lnr-cross" id="close-icon"></span>
				</div>
				<a href="/" class="logo">
					<img src="images\logo-menu-sidebar.png" alt="">
				</a>
				<p class="text">Panaderia con excelente producto con ingredientes de primera calidad. Empresa 100 % Mexicana que abre sus puertas en Salamanca, Gto.</p>
				<!-- SLIDER -->
                <?php
               $query = "select * from alimentos limit 3";
              $alimentos=DB::select($query);
				echo'<div class="owl-carousel owl-theme image-slider style-1" id="image-carousel">';
                foreach($alimentos as $alimento)
                {

				    echo'<div class="item">
				    	<a href="info_platillo?platillo='.$alimento->id_alimento.'">
				    		<img src="'.$alimento->fotografia_miniatura.'" alt="">
				    	</a>
				    </div>';
                }
				echo '</div>';
                
                ?>
				<!-- CONTACT -->
				<div class="contact-part">
					<div class="contact-line">
						<span class="lnr lnr-home"></span>
						<span>Naranjos 220, Bellavista, Salamanca, Gto</span>
					</div>
					<div class="contact-line">
						<a href="tel:+15618003666666">
							<span class="lnr lnr-phone-handset"></span>
							<span>464 126 9311</span>
						</a>
					</div>
					<div class="contact-line">
						<a href="#">
							<span class="lnr lnr-envelope"></span>
							<span> <span class="__cf_email__" data-cfemail="83c6f1eae0aebbb1c3e6fbe2eef3efe6ade0ecee">laartesana@gmail.com</span></span>
						</a>
					</div>
				</div>
				<!-- SOCIAL -->
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
		</header>
		
		@yield('contenido')
		
		<footer>
			<!-- FOOTER TOP -->
			<div class="ft-top">
				<div class="container">
					<div class="ft-top-wrapper">
						<div class="ft-logo">
							<a href="index.html">
								<img src="\images\logo.png" alt="">
							</a>
						</div>
						<div class="row justify-content-between justify-content-xl-start">
							<div class="col-md-3  ft-col">
								<h6>Acerca de </h6>
								<p>Panaderia con excelente producto con ingredientes de primera calidad. Empresa 100 % Mexicana que abre sus puertas en Salamanca, Gto.</p>
							</div>
							<div class="col-md-5  col-xl-4 offset-xl-1 ft-col">

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
							<div class="col-md-3 col-xl-2  ml-xl-auto ft-col">
								<h6>Contacto</h6>
								<p>Naranjos 220, Bellavista, Salamanca, Gto.</p>
								<p>464 126 9311</p>
								<!--<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5f0c7dcd6988d87f5d0cdd4d8c5d9d09bd6dad8">[email&#160;protected]</a></p>
								<p>www.royate.com</p>-->
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="ft-bot">
				<div class="container">
					@ <?php $hoy = getdate();   
                            echo $hoy['year'];
                    ?>
                    Desarrollado por <a target="_blank" href="https://jdevs.com.mx/"> JDev-S</a>			
				</div>
			</div>
		</footer>

		<!-- CLICK TO TOP -->
		<div class="click-to-top">
		    <span class="lnr lnr-arrow-up"></span>
		</div>

		<!-- jQUERY -->
		<script data-cfasync="false" src="..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script src="\js\jquery-3.3.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="\vendor\bootstrap\bootstrap.min.js"></script>

		<!-- Slider Revolution core JavaScript files -->
        <script src="\vendor\revolution-slider\js\jquery.themepunch.revolution.min.js"></script>
        <script src="\vendor\revolution-slider\js\jquery.themepunch.tools.min.js"></script>

        <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
        <script src="\vendor\revolution-slider\js\revolution.extension.actions.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.carousel.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.kenburn.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.layeranimation.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.migration.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.navigation.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.parallax.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.slideanims.min.js"></script>
        <script src="\vendor\revolution-slider\js\revolution.extension.video.min.js"></script>

		<!-- CAROUSEL JS -->
		<script src="\vendor\owl-carousel\js\owl.carousel.min.js"></script>

		<!-- SWEET ALERT -->
		<script src="\js\sweetalert.min.js"></script>

		<!-- SIDENAV MOBILE -->
		<script src="\vendor\hcmobilenav\hc-mobile-nav.js"></script>

		<!-- DATE-PICKER -->
		<script src="\vendor\date-picker\datepicker.js"></script>
		<script src="\vendor\date-picker\datepicker.en.js"></script>

		<!-- JQUERY TIMEPICKER -->
		<script src="\vendor\jquery-timepicker-master\jquery.timepicker.min.js"></script>
		
		<!-- MAIN JS -->
		<script src="\js\main.min.js"></script>
        @yield('scripts')
        
	</body>
</html>