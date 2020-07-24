@extends('welcome')
@section('contenido')
		<main>
			<!-- PAGE BREADCRUMB -->
			<section class="page-breadcrumb">
				<div class="container">
					<div class="row justify-content-between align-content-center">
						<div class="col-md-auto">
							<h3>Carrito de compras</h3>
						</div>
						<div class="col-md-auto">
							<ul class="au-breadcrumb">
								<li>
									<a href="/">Inicio</a>
								</li>
								<li>
									<a href="/tienda">Seguir comprando</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- SHOP CART -->
			<div class="section-primary shop-cart pt-120 pb-101">
				<div class="container">
					<div class="woocommerce">
						<form action="#" class="woocommerce-cart-form">
							<table class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Platillo</th>
										<th class="product-price">Precio</th>
										<th class="product-quantity">Cantidad</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="woocommerce-cart-form__cart-item cart_item">
										<td class="product-remove">
											<a href="#" class="remove" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>		
										</td>

										<td class="product-thumbnail">
											<a href="">
												<img src="images\shop-cart-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
											</a>						
										</td>

										<td class="product-name" data-title="Product">
											<a href="shop-single.html">Best Brownies</a>	
										</td>

										<td class="product-price" data-title="Price">
											<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18</span>	
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="quantity">
												<input type="number" class="input-text qty text input-quantity" step="1" min="0" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4">
												<div class="icon">
													<a href="#" class="number-button plus">+</a>
													<a href="#" class="number-button minus">-</a>
												</div>
											</div>
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18</span>		
										</td>
									</tr>
									<tr class="woocommerce-cart-form__cart-item cart_item">
										<td class="product-remove">
											<a href="#" class="remove" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>		
										</td>
										<td class="product-thumbnail">
											<a href="shop-single.html">
												<img src="images\shop-cart-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
											</a>						
										</td>
										<td class="product-name" data-title="Product">
											<a href="shop-single.html">Angela's Awesome</a>	
										</td>

										<td class="product-price" data-title="Price">
											<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>28</span>	
										</td>

										<td class="product-quantity" data-title="Quantity">
											<div class="quantity">
												<input type="number" class="input-text qty text input-quantity" step="1" min="0" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4">
												<div class="icon">
													<a href="#" class="number-button plus">+</a>
													<a href="#" class="number-button minus">-</a>
												</div>
											</div>
										</td>

										<td class="product-subtotal" data-title="Total">
											<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>28</span>		
										</td>
									</tr>
									<tr>
										<td class="product-remove none">&nbsp;</td>
										<td colspan="3" class="actions">
											<div class="coupon">
												<!--<input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" placeholder="coupon code"> 
												<input type="submit" class="button au-btn" name="apply_coupon" value="Apply">-->
											</div>
											<!--<input type="hidden" id="_wpnonce" name="_wpnonce" value="54045be64c">-->
										</td>
										<td colspan="2" class="cart-subtotal">
											<label>Total:</label>
											<span class="woocommerce-Price-amount amount">
												<span class="woocommerce-Price-currencySymbol">$</span>102
											</span>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="bottom">
							
                                <a href="/tienda" class="button au-btn update-btn has-bd bd-999 round">Seguir comprando</a>
								<a href="/pagar" class=" au-btn go-shopping round has-bg au-btn--hover">Ir a pagar</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
@stop