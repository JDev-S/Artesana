@extends('welcome')
@section('contenido')
		<main>
			<!-- PAGE BREADCRUMB -->
			<section class="page-breadcrumb">
				<div class="container">
					<div class="row justify-content-between align-content-center">
						<div class="col-md-auto">
							<h3>Pagos</h3>
						</div>
						<div class="col-md-auto">
							<ul class="au-breadcrumb">
								<li>
									<a href="/">Inicio</a>
								</li>
								<li>
									<a href="/tienda">Ir a comprar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- SHOPPING CHECKOUT -->
			<section class="checkout-page section-primary pt-120">
				<div class="container">
					<div class="woocommerce">
						<div class="woocommerce-info-wrapper">
							<!--<div id="accordion">
								<div class="woocommerce-info">
									<img src="images\returning-customer.png" alt="">
									Returning customer?
									<a href="#" data-toggle="collapse" data-target="#collapseOne" id="headingOne"> Click here to login</a>
								</div>
								<div id="collapseOne" class="collapse" data-parent="#accordion">
									<form method="get" class="woocommerce-form woocommerce-form-login login">
										<div class="form-holder">
											<label for="username">Username or email address <span class="required">*</span></label>
											<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" value="">
										</div>
										<div class="form-holder">
											<label for="password">Password <span class="required">*</span></label>
											<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password">
										</div>
										<div class="form-holder last">
											<input type="submit" class="woocommerce-Button button au-btn round has-bg" name="login" value="Login">
											<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
												<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> 
												Remember me
												<span class="checkmark"></span>
											</label>
										</div>
										<p class="woocommerce-LostPassword lost_password">
											<a href="#">Lost your password?</a>
										</p>
									</form>
								</div>
								<div class="woocommerce-info">
									<img src="images\have-a-coupon.png" alt="">
									Have a coupon?
									<a href="#" data-toggle="collapse" data-target="#collapseTwo" id="headingTwo"> Click here to enter your code</a>
								</div>
								<div id="collapseTwo" class="collapse" data-parent="#accordion">
									<form class="checkout_coupon" method="post">
										<p class="form-row form-row-first">
											<input type="text" name="coupon_code" class="form-control" placeholder="Coupon code" id="coupon_code" value="">
										</p>
										<p class="form-row form-row-last">
											<input type="submit" class="button au-btn has-bg round" name="apply_coupon" value="Apply coupon">
										</p>
									</form>
								</div>
							</div>-->
						</div>

						<form method="get" class="checkout woocommerce-checkout">
							<div class="row">
								<div class="col-md-6">
									<div class="woocommerce-billing-fields">
										<h5>Detalles del cliente</h5>
										<div class="woocommerce-billing-fields__field-wrapper">
											<div class="row">
												<div class="col-md-6">
													<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
														<label for="billing_first_name">Nombre(s) 
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_first_name" id="billing_first_name">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">Apellidos
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
                                                
                                                <div class="col-md-6">
													<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
														<label for="billing_first_name">Telefono 
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_first_name" id="billing_first_name">
													</p>
												</div>
                                                
												<div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">Correo electronico
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
											</div>
                                            <h5>Detalles para la entrega</h5>
                                            
                                           <div class="row">
												<div class="col-md-6">
													<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
														<label for="billing_first_name">Colonia
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_first_name" id="billing_first_name">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">Calle
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
                                                
                                                <div class="col-md-6">
													<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
														<label for="billing_first_name">No.Interior 
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_first_name" id="billing_first_name">
													</p>
												</div>
                                                
												<div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">No.Exterior
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
                                               
                                                                                               <div class="col-md-6">
													<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field">
														<label for="billing_first_name">Cp 
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_first_name" id="billing_first_name">
													</p>
												</div>
                                                
												<div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">CalleA
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
                                               <div class="col-md-6">
													<p class="form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="billing_last_name">CalleB
															<span class="required" title="required">*</span>
														</label>
														<input class="form-control" type="text" name="billing_last_name" id="billing_last_name">
													</p>
												</div>
											</div>
                                            
 											<div class="woocommerce-additional-fields">
												<div class="woocommerce-additional-fields__field-wrapper">
													<p class="form-row notes" id="order_comments_field" data-priority="">
														<label for="order_comments" class="">Referencia</label>
														<textarea name="order_comments" class="form-control" id="order_comments" placeholder="Referencias del lugar para entregar."></textarea>
													</p>						
												</div>
											</div>


											
											<!--<div class="woocommerce-account-fields">
												<p class="form-row form-row-wide create-account woocommerce-validated">
													<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
														<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> 
														<span>Create an account?</span>
														<span class="checkmark"></span>
													</label>
												</p>
											</div>-->


										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="woocommerce-checkout-review-order-wrap">
										<h5 id="order_review_heading">Tu pedido</h5>

										<div id="order_review" class="woocommerce-checkout-review-order">
											<table class="shop_table woocommerce-checkout-review-order-table">
											    <tbody>
											        <tr class="cart_item">
											            <td class="product-name">
											                <img src="images\check-out-1.jpg" alt="">
											                <div class="review-wrap">
											                	<span class="rv-titel">Best Brownies</span>
															 	<span class="product-quantity">x1</span>
															</div>
											            </td>
											            <td class="product-total">
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">$</span>18
															</span>                
														</td>
											    	</tr>
											        <tr class="cart_item">
											            <td class="product-name">
											                <img src="images\check-out-2.jpg" alt="">
											                <div class="review-wrap">
											                	<span class="rv-titel">Angela's Awesome</span>
															 	<span class="product-quantity">x3</span>
															 </div>
											            </td>
											            <td class="product-total">
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">$</span>84
															</span>                
														</td>
													</tr>
											    </tbody>
										   	</table>
										   	<div class="cart-total">
											    <div class="cart-subtotal">
										        	<p>
										        		<span class="title">Subtotal</span>
										        		<span class="woocommerce-Price-amount amount">
											        		<span class="woocommerce-Price-currencySymbol">$</span>102
												        </span>
										        	</p>
											    </div>
											    <div class="shipping">
													<p>
														<span class="title">Shipping</span>
							                       		there are no shipping methods available. please double check your address, or contact us if you need any help.
													</p>
												</div>
											    <div class="order-total">
											        <p>
											        	<span class="title">Total</span>
											        	<span class="woocommerce-Price-amount amount">
										        			<span class="woocommerce-Price-currencySymbol">$</span>102
										        		</span>
											        </p>
											    </div>
										   	</div>

										   	<div id="payment" class="woocommerce-checkout-payment">
												<ul class="wc_payment_methods payment_methods methods" id="accordion-1">
													<li class="wc_payment_method payment_method_cheque">
														<label for="payment_method_cheque" data-toggle="collapse" data-target="#collapseOne-1" id="headingOne-1">
															<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="" checked="">
															Check payments
															<span class="checkmark"></span>
														</label>
														<div id="collapseOne-1" class="collapse show" data-parent="#accordion-1">
															<div class="payment_box payment_method_cheque">
																<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
															</div>
														</div>
													</li>
													<li class="wc_payment_method payment_method_cod">
														<div class="paypal">
															<label for="payment_method_cod" data-toggle="collapse" data-target="#collapseTwo-1" id="headingTwo-1">
																<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
																Paypal
																<span class="checkmark"></span>
															</label>
															<div class="payment_box payment_method_cod">
																<img src="images\paypal.png" alt="">
																<a href="#">What is paypal?</a>
															</div>
														</div>
														<div id="collapseTwo-1" class="collapse" data-parent="#accordion-1">
															<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
														</div>
													</li>
												</ul>
												<div class="form-row place-order">
													<input type="submit" class="button alt au-btn round has-bg" name="woocommerce_checkout_place_order" id="place_order" value="Poceed to paypal" data-value="Place order">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>

       				</div>
				</div>
			</section>
		</main>
@stop