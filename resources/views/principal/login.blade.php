@extends('welcome')
@section('contenido')
<main>
    <!-- PAGE BREADCRUMB -->
			<section class="page-breadcrumb" style="background-color:black;">
				<div class="container">
					<div class="row justify-content-between align-content-center">
						<div class="col-md-auto">
							<h3>Iniciar sesion</h3>
						</div>
						<div class="col-md-auto">
							<ul class="au-breadcrumb">
								<li>
									<a href="/" style="color: white;">Inicio</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

    <!-- SIGN IN -->
    <section class="section-primary sign-in pt-112 pb-90">
        <div class="container">
            <div class="woocommerce">
                <h4>Iniciar sesión</h4>
                <form class="woocommerce-form woocommerce-form-login login" method="POST" action={{route('logueo')}}>
                    {{ csrf_field() }}
                    <div class="form-holder">
                        <label for="username">Correo electronico <span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="email" required>
                    </div>
                    
                    <div class="form-holder">
                        <label for="password">Contraseña <span class="required">*</span></label>
                        <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="pass" id="pass" required>
                    </div>
                    
                    <div class="form-holder last">
                        <input type="submit" class="woocommerce-Button button au-btn round has-bg" name="login" value="Login">
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>
@stop
