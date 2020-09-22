@extends('welcome')
@section('contenido')
<main>
    <!-- PAGE BREADCRUMB -->
    <section class="page-breadcrumb" style="background-color:black;">
        <div class="container">
            <div class="row justify-content-between align-content-center">
                <div class="col-md-auto">
                    <h3 style="color: white;">Carrito de compras</h3>
                </div>
                <div class="col-md-auto">
                    <ul class="au-breadcrumb">
                        <li>
                            <a href="/" style="color: white;">Inicio</a>
                        </li>
                        <li>
                            <a href="/tienda" style="color: white;">Seguir comprando</a>
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
                        <tbody id="llenado_tabla">



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
@section('scripts')
<script type="text/javascript">
    /*
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
                                       
                                    </div>
                                    
                                </td>
                                <td colspan="2" class="cart-subtotal">
                                    <label>Total:</label>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>102
                                    </span>
                                </td>
                            </tr>
*/


  
    

</script>

    <script type="text/javascript">
        var contenido_tabla = document.getElementById('llenado_tabla');
        var tabla = "";
        var tabla_aux="";

        alert("Imprimo pjanic " + localStorage.length);
        if (localStorage.length > 0)
        {
            alert("Tienes productos");
            for (var i = 0; i < localStorage.length; i++) {
                var id_p = localStorage.key(i);
                if (id_p != 'uuid' && id_p != 'total' && id_p != 'cantidad') {
                    alert("Imprimo la llave :"+id_p);
                    var product = JSON.parse(localStorage.getItem(id_p));
                    //var cant = product.cantidad;
                    //var price = product.precio;
                    //var name = product.nombre;
                    //var photo = product.fotografia;
                    //var id_aliment = product.id;
                    //product="";
                    tabla_aux = '<tr class="woocommerce-cart-form__cart-item cart_item">'+
                                       '<td class="product-remove">'+	
										'</td>'+
										'<td class="product-thumbnail">'+
											'<a href="shop-single.html">'+
												'<img src="'+product.fotografia+'" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">'+
											'</a>'+						
										'</td>'+
										'<td class="product-name" data-title="Product">'+
											'<a href="shop-single.html">'+product.nombre+'</a>'+	
										'</td>'+

										'<td class="product-price" data-title="Price">'+
											'<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>'+product.precio+'</span>	'+
										'</td>'+

										'<td class="product-quantity" data-title="Quantity">'+
											'<div class="quantity">'+
												'<input type="text" class="input-text qty text input-quantity" step="1" disable=true value="'+product.cantidad+'" title="Qty" size="4">'+
												
											'</div>'+
										'</td>'+

										'<td class="product-subtotal" data-title="Total">'+
											'<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>'+product.precio*product.cantidad+'</span>'+	
										'</td>'+
									'</tr>';
                     tabla= tabla+tabla_aux;
                    console.log(tabla);
                }
                else{
                    alert("PENDEJO");
                }
               
            }
            tabla =tabla+' <tr>'+
                                '<td class="product-remove none">&nbsp;</td>'+
                                '<td colspan="3" class="actions">'+
                                    '<div class="coupon">'+
                                    '</div>'+
                                '</td>'+
                                '<td colspan="2" class="cart-subtotal">'+
                                    '<label>Total:</label>'+
                                    '<span class="woocommerce-Price-amount amount">'+
                                        '<span class="woocommerce-Price-currencySymbol">$</span>'+localStorage.getItem("total")+
                                    '</span>'+
                                '</td>'+
                            '</tr>';
            contenido_tabla.innerHTML=tabla;

        } else {
            alert("No tienes productos en el carrito ");
        }
</script>
@stop
@stop
