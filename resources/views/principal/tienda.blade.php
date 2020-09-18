@extends('welcome')
@section('contenido')

<main>
    <!-- PAGE INFO -->
    <section class="page-info set-bg" data-image-src="/images/page-info-bg-5.jpg">
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

                            <?php
                                    echo 'Mostrando '. $pagina.' - '.$pagina*12;
                                    echo ' de '.$numero_platillos[0]->numero_platillos.'  Resultado';
                                    ?>
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

                        @foreach($alimentos as $alimento)
                        <div class="col-md-6 col-lg-4">
                            <div class="item">
                                <div class="thumb">
                                    <a href="/info_platillo?platillo={{$alimento->id_alimento}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img src="{{$alimento->fotografia_miniatura}}" alt="">
                                    </a>
                                   <a href="javaScript:añadircarro({{$alimento->id_alimento}})" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>
                                    
                                    <!--<a href="javaScript:prueba()" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Añadir a carrito</a>-->



                                </div>
                                <div class="info">
                                    <h5 class="woocommerce-loop-product__title">
                                        <a href="/info_platillo?platillo={{$alimento->id_alimento}}">{{$alimento->nombre_alimento}}</a>
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
                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$alimento->precio}}
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="woocommerce-pagination">
                        <ul class="page-numbers">
                            <?php
                       $paginacion= $numero_platillos[0]->numero_platillos/12;
                       $paginacion=ceil($paginacion); 
                    if(empty($buscar))
                    {
                            if(empty($categoria))
                        {

                             if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                                   
                                    echo'<li>
                                        <a href="/tienda/'.$paginacion.'/" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                       echo'<li>
                                        <a href="/tienda/'.($pagina-1).'/" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/12);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                echo'   <li>
                                       <a href="/tienda/'.$i.'/"> <span class="page-numbers current">'.$i.'</span> </a>
                                  </li>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   echo' <li>
                                        <a href="/tienda/'.$i.'/" class="page-numbers inactive">'
                                            .$i.'
                                        </a>
                                    </li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                                    echo '<li>
										<a href="/tienda/'.($pagina+1).'/" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>';
                                      
                           }
                    }
                    else
                        {

                            if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                                   
                                    echo'<li>
                                        <a href="/tienda/'.$paginacion.'/'.$categoria.'" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                       echo'<li>
                                        <a href="/tienda/'.($pagina-1).'/'.$categoria.'" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/12);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                echo'   <li>
                                       <a href="/tienda/'.$i.'/'.$categoria.'"> <span class="page-numbers current">'.$i.'</span> </a>
                                  </li>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   echo' <li>
                                        <a href="/tienda/'.$i.'/'.$categoria.'" class="page-numbers inactive">'
                                            .$i.'
                                        </a>
                                    </li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                                    echo '<li>
										<a href="/tienda/'.($pagina+1).'/'.$categoria.'" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>';
                                      
                           }
                        }
                        
                    }
                      else
                      {
                           if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                                   
                                    echo'<li>
                                        <a href="/tienda/'.$paginacion.'/'.$categoria.'/'.$buscar.'" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                       echo'<li>
                                        <a href="/tienda/'.($pagina-1).'/'.$categoria.'/'.$buscar.'" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/12);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                echo'   <li>
                                       <a href="/tienda/'.$i.'/'.$categoria.'/'.$buscar.'"> <span class="page-numbers current">'.$i.'</span> </a>
                                  </li>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   echo' <li>
                                        <a href="/tienda/'.$i.'/'.$categoria.'/'.$buscar.'" class="page-numbers inactive">'
                                            .$i.'
                                        </a>
                                    </li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                                    echo '<li>
										<a href="/tienda/'.($pagina+1).'/'.$categoria.'/'.$buscar.'" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>';
                                      
                           }
                      }
                    
                   ?>
                            <!--<li>
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
                            </li>-->

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <!-- SEARCH -->
                        <div class="widgets widget_search ">
                            <input type="search" class="form-control " placeholder="Buscar platillo …" value="" id="buscar" name="buscar" onkeypress="pulsar(event)">


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
                                    <a href="/tienda">Todas</a>
                                </li>
                                @foreach($categorias as $categoria)
                                <li>
                                    <a href="/tienda/1/{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- FEATURED PRODUCT -->
                        <div class="widgets woocommerce widget_featured_product">
                            <div class="widget-title">
                                <h5>Platillos nuevos</h5>
                            </div>

                            <div class="featured-product">
                                @foreach($nuevos as $nuevo)
                                <div class="featured-product__item">
                                    <a href="/info_platillo?platillo={{$nuevo->id_alimento}}" class="thumb">
                                        <img src="{{$nuevo->fotografia_miniatura}}" alt="img_foto">
                                    </a>
                                    <div class="info">
                                        <h6 class="woocommerce-loop-product__title">
                                            <a href="/info_platillo?platillo={{$nuevo->id_alimento}}">{{$nuevo->nombre_alimento}}</a>
                                        </h6>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$nuevo->precio}}
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@section('scripts')
<script type="text/javascript">
    function pulsar(e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            e.preventDefault();
            var cod = document.getElementById("buscar").value;
            var url = "/tienda/1/''/" + cod;
            location.href = url;

        }
    }

</script>
<script type="text/javascript">
    let carrito = [];
    //let total = 0;
    

    function añadircarro(id) {
        //localStorage.clear();
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
                var bandera_producto_repetido=0;
                
                var total_compu = document.getElementById('totalCompu');
                var total_celular = document.getElementById('totalCel');
                console.log(msg+"--------------------");
                var datos = JSON.parse(msg);
                
                var foto = datos[0]['fotografia_miniatura'];
                var nombre = datos[0]['nombre_alimento'];
                var precio = datos[0]['precio'];
                var id_alimento = datos[0]['id_alimento'];
                var cantidad;
                
                 for (var i = 0; i < localStorage.length; i++) {
                    var id = localStorage.key(i);
                     if(id==id_alimento){
                         alert("entroooooo");
                         var producto = JSON.parse(localStorage.getItem(id));
                         cantidad=producto.cantidad+1;
                         producto.cantidad=cantidad;
                         localStorage.setItem(id,JSON.stringify(producto));
                         //localStorage.setItem(id, JSON.stringify(alimento));
                         var contenido_item_compu = document.getElementById('item_compu_'+id);
                         var contenido_item_celular = document.getElementById('item_celular_'+id);
                         bandera_producto_repetido=1;
                         break;
                     }
                 }
                
                var mensaje = "";
                var total_aux=0;
                if(bandera_producto_repetido==0){
                    var contenido_compu = document.getElementById('carritoCompu');
                    var contenido_celular = document.getElementById('carritoCel');
                    cantidad=1;
                    var alimento = new Object();
                    
                    alimento.fotografia = foto;
                    alimento.nombre = nombre;
                    alimento.precio = precio;
                    alimento.id = id_alimento;
                    alimento.cantidad="1";
                    
                    var cadena = JSON.stringify(alimento);
                    localStorage.setItem(id_alimento, JSON.stringify(alimento));
                    
                     for (var i = 0; i < 2; i++) {
                          var id_item="";
                         if(i==0){
                             id_item='item_compu_'+id_alimento;
                         }
                         else{
                             id_item='item_celular_'+id_alimento;
                         }
                         mensaje = '<li class="woocommerce-mini-cart-item mini_cart_item clearfix" id="'+id_item+'">' +
                            '<a href="javaScript:eliminar('+id_alimento+')" class="remove remove_from_cart_button" aria-label="Remove this item">' +
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
                            'x'+ cantidad +
                            '</span>' +
                            '</li>';
                   
                        //console.log(total);
                         if(i==0){
                             contenido_compu.innerHTML+=mensaje;
                         }
                         else{
                             contenido_celular.innerHTML+=mensaje;
                         }
                     }   
                }
                else{
                     mensaje = 
                            '<a href="javaScript:eliminar('+id_alimento+')" class="remove remove_from_cart_button" aria-label="Remove this item">' +
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
                            'x'+cantidad +
                            '</span>';
                         
                        contenido_item_compu=mensaje;
                        contenido_item_celular=mensaje;
                }
                total_aux=cantidad*precio;
                total_compu.innerHTML=total+total_aux;
                total_celular.innerHTML=total+total_aux;
                
                console.log("Tamaño de la localstorage: "+localStorage.length);
            },
           // error: function(XMLHttpRequest, textStatus, errorThrown) {
            //error: function(xhr, textStatus, errorMessage){
              //  console.log("ERROR" + errorMessage + textStatus + xhr);
                //console.log("hay un error"+ JSON.stringify(XMLHttpRequest));
                //console.log("ERROR : "+textStatus);
            //}
            error:function( jqXHR, textStatus, errorThrown ) {

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

</script>
@stop
@stop

<!--

-->
