@extends('welcome')
@section('styles')
<style>
    #carrusel {
        float: left;
        width: 588px;
        overflow: hidden;
        height: 100px;
        position: relative;
        margin-top: 20px;
    }

    /*.carrusel_img {
	float:left;
	margin-left:15px;
}*/

    #carrusel .izquierda_flecha {
        position: absolute;
        left: 10px;
        z-index: 1;
        top: 50%;
        margin-top: -9px;
    }

    #carrusel .derecha_flecha {
        position: absolute;
        right: 10px;
        z-index: 1;
        top: 50%;
        margin-top: -9px;
    }

    .carrusel {
        width: 4000px;
        left: 0px;
        position: absolute;
        z-index: 0
    }

    .carrusel>div {
        float: left;
        height: 100px;
        margin-right: 5px;
        width: 195px;
        text-align: center;
    }

    .carrusel .img_carrusel {
        cursor: pointer;
    }

    #content {
        float: left;
        width: 600px;
        margin-bottom: 40px;
        margin: 0px auto;
    }

</style>
@stop
@section('contenido')
<main>
    <!-- PAGE INFO -->
    <section class="page-info set-bg" data-image-src="images/page-info-bg-5.jpg">
        <div class="section-header">
            <h1 class="text-white">{{$platillos[0]->nombre_alimento}}</h1>
            <span>~{{$platillos[0]->nombre_categoria}} ~</span>
        </div>
    </section>

    <!-- SHOP SINGLE -->
    <section class="section-primary pt-150 pb-113 shop-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <div class="woocommerce-product-gallery__image">
                                <img id="zoom-image" class="attachment-shop_single size-shop_single wp-post-image" src="{{$platillos[0]->fotografia_miniatura}}" data-zoom-image="i$platillos[0]->fotografia_miniatura" alt="img_miniatura">
                            </div>
                        </figure>
                        <div id="shop-single-thumb">
                            <a href="#" data-image="{{$platillos[0]->fotografia_miniatura}}" data-zoom-image="{{$platillos[0]->fotografia_miniatura}}">
                                <img src='{{$platillos[0]->fotografia_miniatura}}' alt="">
                            </a>
                            @foreach($fotos as $foto)
                            
                            <a href="#" data-image="{{$foto->imagen_muestra}}" data-zoom-image="{{$foto->imagen_muestra}}">
                                <img src='{{$foto->imagen_muestra}}' alt="">
                            </a>

                            @endforeach
                        </div>
                    </div>-->

                    <div id="content">
                        <img id="imatgeGran" src="{{$platillos[0]->fotografia_miniatura}}" />

                        <div id="carrusel">
                            <a href="#" class="izquierda_flecha"><img src="/images/flecha_01.png" /></a>
                            <a href="#" class="derecha_flecha"><img src="/images/flecha_02.png" /></a>
                            <div class="carrusel">
                                <?php
                                $i=0;
                                foreach($fotos as $foto){
                                echo' <div id="imagen_'.$i.'"><img class="img_carrusel" data="'.$foto->imagen_muestra.'" src="'.$foto->imagen_muestra.'" width="195px" height="100px" /></div>';
                                }
                                $i++;
                                ?>
                                <!--<div id="imagen_1"><img class="img_carrusel" data="gallery/03.jpg" src="gallery/03.jpg" width="195px" height="100px" /></div>
                                <div id="imagen_2"><img class="img_carrusel" data="gallery/04.jpg" src="gallery/04.jpg" width="195px" height="100px" /></div>
                                <div id="imagen_3"><img class="img_carrusel" data="gallery/05.jpg" src="gallery/05.jpg" width="195px" height="100px" /></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="summary entry-summary">
                        <h3 class="product_title entry-title">{{$platillos[0]->nombre_alimento}}</h3>
                        <div class="info">
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>{{$platillos[0]->precio}}
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
                            <p>{{$platillos[0]->descripcion}}.</p>
                        </div>

                        <div class="quantity">
                            <input type="number" step="1" min="1" max="10" title="Qty" size="4" id="input-quantity">
                            <div class="icon">
                                <a href="#" class="number-button plus">+</a>
                                <a href="#" class="number-button minus">-</a>
                            </div>
                        </div>
                        <?php
                            if($platillos[0]->disponible==1)
                            {
                            echo '<a class="single_add_to_cart_button button alt au-btn round has-bg au-btn--hover" href="javaScript:añadircarro('.$platillos[0]->id_alimento.')">Añadir al carrito</a>
                        </form>
                        <div class="product_meta">
                            <span class="sku_wrapper">Disponibilidad: <span class="sku">Hay disponible</span></span>
                            <span class="posted_in">Categoria: <a href="#" rel="tag">'.$platillos[0]->nombre_categoria.'</a></span>

                        </div>';
                        }
                        else
                        {
                         echo'    <div class="product_meta">
                            <span class="sku_wrapper">Disponibilidad: <span class="sku">No hay disponible</span></span>
                            <span class="posted_in">Categoria: <a href="#" rel="tag">'.$platillos[0]->nombre_categoria.'</a></span>

                        </div>';
                        }
                        ?>

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
                        <p>{{$platillos[0]->descripcion}}. </p>
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
                <h4>Platillos similares</h4>
                <div class="row">

                    @foreach($similares as $similar)

                    <div class="col-md-4 col-lg-3">
                        <div class="item mb-0">
                            <div class="thumb">
                                <a href="/info_platillo?platillo={{$similar->id_alimento}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <img src="{{$similar->fotografia_miniatura}}" alt="img_platillo">
                                </a>

                            </div>
                            <div class="info">
                                <h5 class="woocommerce-loop-product__title">
                                    <a href="/info_platillo?platillo={{$similar->id_alimento}}">{{$similar->nombre_alimento}}</a>
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
                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$similar->precio}}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@section('scripts')

<script>
    // jQuery.noConflict();
    var posicion = 0;
    var imagenes = new Array();
    $(document).ready(function() {
        //alert(jQuery('.texto').html());
        var numeroImatges = 4;
        if (numeroImatges <= 3) {
            $('.derecha_flecha').css('display', 'none');
            $('.izquierda_flecha').css('display', 'none');
        }



        $('.img_carrusel').live('click', function() {
            $('#imatgeGran').attr('src', $(this).attr('src'));
            return false;
        });

        $('.izquierda_flecha').live('click', function() {
            if (posicion > 0) {
                posicion = posicion - 1;
            } else {
                posicion = numeroImatges - 3;
            }
            $(".carrusel").animate({
                "left": -($('#imagen_' + posicion).position().left)
            }, 600);
            return false;
        });

        $('.izquierda_flecha').hover(function() {
            $(this).css('opacity', '0.5');
        }, function() {
            $(this).css('opacity', '1');
        });

        $('.derecha_flecha').hover(function() {
            $(this).css('opacity', '0.5');
        }, function() {
            $(this).css('opacity', '1');
        });

        $('.derecha_flecha').live('click', function() {
            if (numeroImatges > posicion + 3) {
                posicion = posicion + 1;
            } else {
                posicion = 0;
            }
            $(".carrusel").animate({
                "left": -($('#imagen_' + posicion).position().left)
            }, 600);
            return false;
        });

    });

</script>

<script type="text/javascript">
    function añadircarro(id) {
        //localStorage.clear();
        var cant = parseInt(document.getElementById('input-quantity').value, 10);
        alert("Imprime cantidad=" + cant + "------------- con el id " + id);
        alert(typeof(cant));
        if (cant > 0 && cant < 10) {
            console.log(id);
            alert("entro")
            var token = '{{csrf_token()}}';
            var data = {
                id: id,
                _token: token
            };
            //var url = "info_carrito/" + 21;
            //alert (url);
            $.ajax({
                type: "POST",
                url: "/info_carrito",
                data: data,
                success: function(msg) {
                    alert("entro")
                    alert(msg);
                    var bandera_producto_repetido = 0;

                    var total_compu = document.getElementById('totalCompu');
                    var total_celular = document.getElementById('totalCel');
                    var cantidad_compu = document.getElementById('cantidadCompu');
                    var cantidad_celular = document.getElementById('cantidadCel');
                    console.log(msg + "--------------------");
                    var datos = JSON.parse(msg);
                    alert("Imprimo el valor de datos :" + datos);
                    var foto = datos[0]['fotografia_miniatura'];
                    var nombre = datos[0]['nombre_alimento'];
                    var precio = datos[0]['precio'];
                    var id_alimento = datos[0]['id_alimento'];
                    alert("Fotografias miniaturas : " + foto);
                    alert("Nombre : " + nombre);
                    alert("Precio :" + precio);
                    alert("id_alimento :" + id_alimento);
                    var cantidad_alimento = 0;
                    var contenido_item_compu;
                    var contenido_item_celular;

                    for (var i = 0; i < localStorage.length; i++) {
                        var id = localStorage.key(i);
                        if (id == id_alimento) {
                            alert("entroooooo");
                            var producto = JSON.parse(localStorage.getItem(id));
                            cantidad = parseInt(producto.cantidad, 10) + cant;
                            cantidad_alimento = cant;
                            console.log("IMPRIMO LA CANTIDAD NUEVA :" + cantidad);
                            producto.cantidad = cantidad;
                            localStorage.setItem(id, JSON.stringify(producto));
                            contenido_item_compu = document.getElementById('item_compu_' + id);
                            contenido_item_celular = document.getElementById('item_celular_' + id);
                            alert('item_celular_' + id);
                            //localStorage.setItem(id, JSON.stringify(alimento));
                            bandera_producto_repetido = 1;
                            break;
                        }
                    }

                    var mensaje = "";
                    var total_aux = 0;
                    if (bandera_producto_repetido == 0) {
                        var contenido_compu = document.getElementById('carritoCompu');
                        var contenido_celular = document.getElementById('carritoCel');
                        cantidad = cant;
                        var alimento = new Object();

                        alimento.fotografia = foto;
                        alimento.nombre = nombre;
                        alimento.precio = precio;
                        alimento.id = id_alimento;
                        alimento.cantidad = cant;

                        var cadena = JSON.stringify(alimento);
                        localStorage.setItem(id_alimento, JSON.stringify(alimento));
                        //total_aux=parseInt(localStorage.getItem('total'),10);


                        for (var i = 0; i < 2; i++) {
                            total_aux = 0;
                            var id_item = "";
                            if (i == 0) {
                                id_item = 'item_compu_' + id_alimento;
                            } else {
                                id_item = 'item_celular_' + id_alimento;
                            }
                            mensaje = '<li class="woocommerce-mini-cart-item mini_cart_item clearfix" id="' + id_item + '">' +
                                '<a href="javaScript:eliminar(' + id_alimento + ')" class="remove remove_from_cart_button" aria-label="Remove this item">' +
                                '<span class="lnr lnr-cross-circle"></span>' +
                                '</a>' +
                                '<a href="#" class="image-holder">' +
                                '<img src="' + foto + '" class="attachment-shop_thumbnail' + 'size-shop_thumbnail wp-post-image" alt="">' +
                                '<span class="product-name">' + nombre + '</span>' +
                                '</a>' +
                                '<span class="quantity">' +
                                '<span class="woocommerce-Price-amount amount">' +
                                '<span class="woocommerce-Price-currencySymbol">$</span>' + precio +
                                '</span>' +
                                'x' + cantidad +
                                '</span>' +
                                '</li>';
                            total_aux = cant * (parseInt(precio, 10)) + total_aux;
                            cantidad_alimento = cant;
                            //localStorage.setItem('total',total_aux+'');

                            //console.log(total);
                            if (i == 0) {
                                contenido_compu.innerHTML += mensaje;
                            } else {
                                contenido_celular.innerHTML += mensaje;
                            }
                        }
                    } else {
                        alert("ENTRO UN REPETIDO");
                        console.log("imprimo_item_compu : " + contenido_item_compu);
                        console.log("imprimo_item_celular :" + contenido_item_celular);
                        contenido_item_compu.innerHTML = "";
                        contenido_item_celular.innerHTML = "";
                        mensaje =
                            '<a href="javaScript:eliminar(' + id_alimento + ')" class="remove remove_from_cart_button" aria-label="Remove this item">' +
                            '<span class="lnr lnr-cross-circle"></span>' +
                            '</a>' +
                            '<a href="#" class="image-holder">' +
                            '<img src="' + foto + '" class="attachment-shop_thumbnail' + 'size-shop_thumbnail wp-post-image" alt="">' +
                            '<span class="product-name">' + nombre + '</span>' +
                            '</a>' +
                            '<span class="quantity">' +
                            '<span class="woocommerce-Price-amount amount">' +
                            '<span class="woocommerce-Price-currencySymbol">$</span>' + precio +
                            '</span>' +
                            'x' + cantidad +
                            '</span>';
                        alert("imprimo_item_mensaje_compu : " + mensaje);
                        alert("imprimo_item_mensaje_celular :" + mensaje);
                        //total_aux=parseInt(localStorage.getItem('total'),10);

                        contenido_item_compu.innerHTML = mensaje;
                        contenido_item_celular.innerHTML = mensaje;
                        total_aux = cant * parseInt(precio, 10);
                    }
                    //total_aux=cantidad*precio+total_aux;
                    //console.log("Valor de total : "+localStorage.getItem('total'));
                    total_compu.innerHTML = parseInt(localStorage.getItem('total'), 10) + total_aux;
                    total_celular.innerHTML = parseInt(localStorage.getItem('total'), 10) + total_aux;
                    cantidad_celular.innerHTML = parseInt(localStorage.getItem('cantidad'), 10) + cantidad_alimento;
                    cantidad_compu.innerHTML = parseInt(localStorage.getItem('cantidad'), 10) + cantidad_alimento;
                    var total_final = parseInt(localStorage.getItem('total'), 10) + total_aux;
                    var cantidad_total = parseInt(localStorage.getItem('cantidad'), 10) + cantidad_alimento;
                    localStorage.setItem('total', total_final + '');
                    localStorage.setItem('cantidad', cantidad_total + '');



                    console.log("Tamaño de la localstorage: " + localStorage.length);
                },
                // error: function(XMLHttpRequest, textStatus, errorThrown) {
                //error: function(xhr, textStatus, errorMessage){
                //  console.log("ERROR" + errorMessage + textStatus + xhr);
                //console.log("hay un error"+ JSON.stringify(XMLHttpRequest));
                //console.log("ERROR : "+textStatus);
                //}
                error: function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 0) {

                        alert('Not connect: Verify Network.');

                    } else if (jqXHR.status == 404) {

                        alert('Requested page not found [404]');

                    } else if (jqXHR.status == 500) {

                        alert('Internal Server Error [500].');

                    } else if (textStatus === 'parsererror') {

                        alert('Requested JSON parse failed.');

                    } else if (textStatus === 'timeout') {

                        alert('Time out error.');

                    } else if (textStatus === 'abort') {

                        alert('Ajax request aborted.');

                    } else {

                        alert('Uncaught Error: ' + jqXHR.responseText);

                    }

                }
            });
            //carrito.push(id);

            //console.log(carrito);
        }
        else{
            alert("No pueden ser mas de 10 platillos");
        }
    }

</script>
@stop
@stop
