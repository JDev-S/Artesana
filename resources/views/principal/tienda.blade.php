@extends('welcome')
@section('contenido')

		<main>
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-image-src="images/page-info-bg-5.jpg">
				<div class="section-header">
					<h1 class="text-white">Lista de platillos</h1>
					<span>~ Deliciosa comida ~</span>
				</div>
			</section>
			
			<!-- SHOP LIST -->
			<section class="section-primary pt-150 pb-113 shop-list">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="sorting">
                                <p class="woocommerce-result-count">
										Showing 1–15 of 27 results
									</p>
								<!--<form method="get" class="woocommerce-ordering">
									
									<div class="form-holder">
										<select name="orderby" class="orderby form-control">
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
										<span class="lnr lnr-chevron-down"></span>
									</div>
								</form>-->
							</div>
							<div class="row products">
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-1.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Bacon coil baked</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>65
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-2.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Chantal's New York</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>12
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-3.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Mongolian Beef</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>23
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-4.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Angela's Awesome</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>28
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-5.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Colleen's Slow Cooker</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>39
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-6.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Baked Teriyaki Chicken</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>24
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-7.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Sour Cream Bread</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>34
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-8.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Best Brownies</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>27
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-9.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Mom's Zucchini Bread</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>12
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-10.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Too Much Chocolate</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>16
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-11.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Fluffy Pancakes</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>25
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="images\shop-list-12.jpg" alt="">
											</a>
											<a href="/info_platillo" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="/info_platillo">Easter Breakfast</a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>29
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="woocommerce-pagination">
								<ul class="page-numbers">
									<li>
										<a href="#" class="page-numbers prev">
											<span class="lnr lnr-arrow-left"></span>
										</a>
									</li>
									<li>
										<span class="page-numbers current">1</span>
									</li>
									<li>
										<a href="#" class="page-numbers inactive">
											2
										</a>
									</li>
									<li>
										<a href="#" class="page-numbers inactive">
											3
										</a>
									</li>
									<li>
										<a href="#" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="sidebar">
								<!-- SEARCH -->
								<div class="widgets widget_search">
									<form method="get" class="search-form">
										<input class="form-control" type="text" name="s" id="s" placeholder="Buscar">
										<button class="search-icon">
											<span class="lnr lnr-magnifier"></span>
										</button>
									</form>
								</div>
								<!-- FILTER -->
								<!--<div class="widgets woocommerce widget_price_filter">
									<div class="widget-title">
										<h5>Filter by price</h5>
									</div>
									<form method="get">
										<div class="price_slider_wrapper">
											<div id="slider"></div>
											<div class="price_slider_amount">
												<div class="price_label">
													Price: 
													<span class="from">
														$<span id="lower-value">9</span>
													</span> — 
													<span class="to">
														$<span id="upper-value">190</span>
													</span>
												</div>
												<button type="submit" class="button">Filter</button>
											</div>
										</div>
									</form>
								</div>-->
								<!-- CATEGORIES -->
								<div class="widgets widget_categories">
									<div class="widget-title">
										<h5>Categorias</h5>
									</div>
									<ul>
										<li>
											<a href="#">Seafood (<span>2</span>)</a>
										</li>
										<li>
											<a href="#">Coffee (<span>5</span>)</a>
										</li>
										<li>
											<a href="#">Restaurant (<span>18</span>)</a>
										</li>
										<li>
											<a href="#">Cupcake (<span>22</span>)</a>
										</li>
										<li>
											<a href="#">Lunch (<span>19</span>)</a>
										</li>
									</ul>
								</div>
								<!-- FEATURED PRODUCT -->
								<div class="widgets woocommerce widget_featured_product">
									<div class="widget-title">
										<h5>Platillos nuevos</h5>
									</div>
									<div class="featured-product">
										<div class="featured-product__item">
											<a href="/info_platillo" class="thumb">
												<img src="images\featured-product-1.png" alt="">
											</a>
											<div class="info">
												<h6 class="woocommerce-loop-product__title">
													<a href="/info_platillo">Spicy Garlic Lime</a>
												</h6>
												<span class="price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>26
													</span>
												</span>
											</div>
										</div>
										<div class="featured-product__item">
											<a href="/info_platillo" class="thumb">
												<img src="images\featured-product-2.png" alt="">
											</a>
											<div class="info">
												<h6 class="woocommerce-loop-product__title">
													<a href="/info_platillo">Baked Teriyaki</a>
												</h6>
												<span class="price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>12
													</span>
												</span>
											</div>
										</div>
										<div class="featured-product__item">
											<a href="/info_platillo" class="thumb">
												<img src="images\featured-product-3.png" alt="">
											</a>
											<div class="info">
												<h6 class="woocommerce-loop-product__title">
													<a href="/info_platillo">Brown Sugar Meatloaf </a>
												</h6>
												<span class="price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>13
													</span>
												</span>
											</div>
										</div>
										<div class="featured-product__item">
											<a href="/info_platillo" class="thumb">
												<img src="images\featured-product-4.png" alt="">
											</a>
											<div class="info">
												<h6 class="woocommerce-loop-product__title">
													<a href="/info_platillo">The Best Meatloaf </a>
												</h6>
												<span class="price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>19
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<!-- BANNER -->
								<!--<div class="widgets widget_banner">
									<a href="#">
										<img src="images\widget-banner.jpg" alt="">
									</a>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
@stop