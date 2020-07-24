@extends('welcome')
@section('contenido')
		<main>
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-image-src="images/page-info-bg-5.jpg">
				<div class="section-header">
					<h1 class="text-white">Nombre del platillo</h1>
					<span>~Nombre de la categoria ~</span>
				</div>
			</section>
			
			<!-- SHOP SINGLE -->
			<section class="section-primary pt-150 pb-113 shop-single">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images">
								<figure class="woocommerce-product-gallery__wrapper">
						    		<div class="woocommerce-product-gallery__image">
							    		<img id="zoom-image" class="attachment-shop_single size-shop_single wp-post-image" src="images\shop-single-medium-1.jpg" data-zoom-image="images/shop-single-big-1.jpg" alt="">
							    	</div>
						    	</figure>
								<div id="shop-single-thumb">
									<a href="#" data-image="images/shop-single-medium-1.jpg" data-zoom-image="images/shop-single-big-1.jpg">
										<img src='images\shop-single-small-1.jpg' alt="">
									</a>
									<a href="#" data-image="images/shop-single-medium-2.jpg" data-zoom-image="images/shop-single-big-2.jpg">
										<img src='images\shop-single-small-2.jpg' alt="">
									</a>
									<a href="#" data-image="images/shop-single-medium-3.jpg" data-zoom-image="images/shop-single-big-3.jpg">
										<img src='images\shop-single-small-3.jpg' alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="summary entry-summary">
								<h3 class="product_title entry-title">Colleen's Slow Cooker</h3>
								<div class="info">
									<span class="price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>39
										</span>
									</span>
									<span class="star-rating">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									</span>
								</div>
								<div class="woocommerce-product-details__short-description">
								    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious.</p>
								</div>
								<form class="cart" method="post" enctype="multipart/form-data">
									<div class="quantity">
										<input type="number" class="input-text qty text" step="1" min="0" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" id="input-quantity">
										<div class="icon">
											<a href="#" class="number-button plus">+</a>
											<a href="#" class="number-button minus">-</a>
										</div>
									</div>
									<button type="submit" name="add-to-cart" value="" class="single_add_to_cart_button button alt au-btn round has-bg au-btn--hover">Añadir al carrito</button>
								</form>
								<div class="product_meta">
									<span class="sku_wrapper">SKU: <span class="sku">0036982</span></span>
									<span class="posted_in">Category: <a href="#" rel="tag">Other</a></span>
									<span class="tagged_as">Tag: 
										<a href="#" rel="tag">Bakery</a>,
										<a href="#" rel="tag">Sea Food</a>
									</span>
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
					</div>
					<!-- WOOCOMMERCE TABS -->
					<div class="woocommerce-tabs wc-tabs-wrapper">
						<div id="shop-single-tab">
							<ul class="tabs wc-tabs">
								<li class="description_tab">
									<a href="#description">Descripcion</a>
								</li>
								<!--<li class="additional_information_tab">
									<a href="#add-info">Additional Information</a>
								</li>-->
								<!--<li class="reviews_tab">
									<a href="#review">Reviews (0)</a>
								</li>-->
							</ul>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="description">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
							</div>
							<!--<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="add-info">
								<table class="shop_attributes">
									<tbody>
										<tr>
											<th>Weight</th>
											<td class="product_weight">2kg</td>
										</tr>
										<tr>
											<th>Dimensions</th>
											<td class="product_dimensions">15 x 20 x 15 cm</td>
										</tr>
									</tbody>
								</table>
							</div>-->
							<!--<div id="review" class="woocommerce-Reviews">
								<div id="comments">
									<h6 class="woocommerce-noreviews">
										BE THE FIRST TO REVIEW
									</h6>
								</div>
								<div id="review_form_wrapper">
									<div id="review_form">
										<div id="respond" class="comment-respond">
											<form method="get" id="comments-form" class="comments-form">
												<p class="comment-notes">Your email address will not be published. Required fields are marked.</p>
												<div class="comment-form-rating">
													<label>Your rating</label>
													<span class="star-rating">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
													</span>
												</div>
												<p class="comment-form-comment">
													<textarea id="comment" name="comment" class="form-control" required="" placeholder="Your Message"></textarea>
												</p>
												<p class="comment-form-author">
													<input id="author" name="author" type="text" value="" class="form-control" aria-required="true" required="" placeholder="Your Name">
												</p>
												<p class="comment-form-email">
													<input id="email" name="email" type="email" value="" class="form-control" aria-required="true" required="" placeholder="Your Mail">
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class="submit au-btn round has-bg" value="Submit"> 
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>-->
						</div>
					</div>
					<!-- RELATED PRODUCT -->
					<div class="related products">
						<h4>Nuevos platillos</h4>	
						<div class="row">
							<div class="col-md-4 col-lg-3">
								<div class="item">
									<div class="thumb">
										<a href="/info_platillo" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
							<div class="col-md-4 col-lg-3">
								<div class="item">
									<div class="thumb">
										<a href="/info_platillo" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
							<div class="col-md-4 col-lg-3">
								<div class="item">
									<div class="thumb">
										<a href="/info_platillo" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
							<div class="col-md-4 col-lg-3">
								<div class="item mb-0">
									<div class="thumb">
										<a href="/info_platillo" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
											<img src="images\shop-list-17.jpg" alt="">
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
						</div>
					</div>
				</div>
			</section>
		</main>
@stop