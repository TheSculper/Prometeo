
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Prometeo</title>

	<link rel="stylesheet" type="text/css" href="css/vendors/Bootstrap/bootstrap.min.css">


	<link href="css/plugins/navigation.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/main.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme-font.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

</head>
<style type="text/css">
	
@media (min-width: 992px)
{
	.navigation-logo a img {
    	height: 72px !important;
    	margin-top: -10px !important;
	}

}

.site-header.header--fixed
{
	background-color: black;
	-webkit-box-shadow: 0px 7px 34px -4px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 7px 34px -4px rgba(0,0,0,0.75);
	box-shadow: 0px 7px 34px -4px rgba(0,0,0,0.75);
}

</style>
<body>

  <script>
  	function validaForm(){
    // Campos de texto
    if($("#correo").val() == ""){
        alert("El campo del correo no puede estar vacío.");
        $("#correo").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }

    return true;

}
	  
  $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("http://prometeochile.cl/web3/enviar-index.php",$("#formdata").serialize(),function(res){
                $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                    $("#formulario").delay(2800).fadeIn("slow");
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                    $("#formulario").delay(2800).fadeIn("slow");
                }
            });
        }
    });    
});
  </script>

<!-- Preloader -->

<!--<div id="hellopreloader">
	<div class="preloader">
		<svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
			<g fill="none" fill-rule="evenodd">
				<g transform="translate(2 1)" stroke="#FFF" stroke-width="1.5">
					<circle cx="42.601" cy="11.462" r="5" fill-opacity="1" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="1;0;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="49.063" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;1;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="42.601" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;1;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="49.125" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;1;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;1;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="4.938" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;1;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="11.462" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;1;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="5" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;0;1" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
				</g>
			</g>
		</svg>
	</div>
</div>-->

<!-- ... end Preloader -->


<!-- Main Header -->

<nav id="navigation" class="site-header navigation navigation-justified header--sticky">
	<div class="container">
		<div class="navigation-header">
			<div class="navigation-logo">
				<a href="index.html">


					<img loading="lazy" src="images/logo.png" alt="logo">

				</a>
			</div>
			<div class="navigation-button-toggler">
				<i class="hamburger-icon"></i>
			</div>
		</div>
		<div class="navigation-body">
			<div class="navigation-body-header">
				<div class="navigation-logo">
					<a href="index.html">


						<img loading="lazy" src="images/logo.png" alt="logo">

					</a>
					<ul class="navigation-menu">
				<li class="navigation-item has-submenu">
					<a class="navigation-link" href="#servicios">Servicios</a>
					<div class="navigation-megamenu navigation-submenu" style="right: 0px;">
						<div class="navigation-megamenu-container">
							<div class="navigation-row">
								<div class="navigation-col">
									<a href="#iconos-servicios" class="navigation-hosting-item border-primary-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="images/pro-academy.png" alt="PRO ACADEMY">

										Pro Academy
									</a>
								</div>
								<div class="navigation-col">
									<a href="#iconos-servicios" class="navigation-hosting-item border-red-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="images/investigacion-prometeo.png" alt="Ayudas tecnicas">

										Ayudas Tecnicas
									</a>
								</div>
								<div class="navigation-col">
									<a href="#iconos-servicios" class="navigation-hosting-item border-orange-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="images/pet-prometeo.png" alt="Pet prometeo">

										Pet Prometeo
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="navigation-item has-submenu">
					<a class="navigation-link" style="color: #fff;">Nosotros</a>
					<ul class="navigation-dropdown navigation-submenu" style="right: auto;">
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="#quienes-somos">¿Quiénes somos?</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="#directiva">Directiva</a>
						</li>
					</ul>
				</li>
			</ul>
				</div>
				<span class="navigation-body-close-button">&#10005;</span>
			</div>
			<div class="navigation-body-section navigation-additional-menu">
				
				<!--<a href="https://b.pgf.cl/FundacionProm/20744/a61fa661-7214-4f43-845d-10af759ea179" style="color: #fff;background-color: #00ad1d;border-color: #2e6da4;padding: 10px;border: 1px solid transparent;border-radius: 4px;font-size: 30px;" target="_blank" > Donar </a>-->
				<form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="QN3U8PBC5RMPN" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_CL/i/scr/pixel.gif" width="1" height="1" />
</form>
				<!--<div class="navigation-search">
					<div class="link-modal-popup" data-toggle="modal" data-target="#popupSearch"></div>
					<svg class="crumina-icon">
						<use xlink:href="#icon-search"></use>
					</svg>
				</div>
				<div class="navigation-user-menu">
					<div class="link-modal-popup" data-toggle="modal" data-target="#userMenuPopup"></div>
					<svg class="crumina-icon">
						<use xlink:href="#icon-user-menu"></use>
					</svg>
				</div>-->
			</div>
		</div>
	</div>
</nav>

<!-- ... end Main Header -->


<!-- Popup Search -->

<div class="modal fade window-popup popup-search" id="popupSearch" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
								<h2 class="fw-medium text-white"><FORM>Que estas buscando</FORM>?</h2>
								<form class="search-popup-form">
									<div class="input-btn--inline">
										<input class="input--dark" type="text" placeholder="Indicanos...">
										<button type="button" class="crumina-button button--primary button--l">SEARCH</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Popup Search -->


<!-- User Menu Popup -->

<div class="modal fade window-popup user-menu-popup" id="userMenuPopup" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="user-menu">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
								<a href="index.html" class="site-logo">


									<img loading="lazy" src="img/demo-content/logo-colored.png" alt="logo" width="185">

								</a>
								<p class="fw-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<form class="sign-in-form">
									<h6 class="text-white">SIGN IN TO YOUR ACCOUNT</h6>
									<div class="form-item">
										<input class="input--dark input--squared" type="text" placeholder="Username or email">
									</div>
									<div class="form-item">
										<input class="input--dark input--squared" type="password" placeholder="Password">
									</div>
									<div class="form-item">
										<div class="remember-wrapper text-white">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes4">

													Remember Me
												</label>
											</div>
											<a href="#">Lost your password?</a>
										</div>
									</div>
									<div class="form-item">
										<button type="button" class="crumina-button button--primary button--l w-100">Sign In</button>
									</div>
								</form>

								<p class="text-white fw-medium">Sign In with social networks:</p>
								<ul class="socials">
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/facebook.png" alt="facebook">

										</a>
									</li>
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/twitter.png" alt="twitter">

										</a>
									</li>
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/google.png" alt="google">

										</a>
									</li>
								</ul>

								<button type="button" class="crumina-button button--grey button--l button--bordered w-100">CREATE AN ACCOUNT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end User Menu Popup -->


<div class="main-content-wrapper">

	<section class="crumina-module crumina-module-slider crumina-main-slider">
		<!--Prev next buttons-->

		<div class="swiper-btn-prev">
			<svg class="crumina-icon">
				<use xlink:href="#icon-prev"></use>
			</svg>
		</div>

		<div class="swiper-btn-next">
			<svg class="crumina-icon">
				<use xlink:href="#icon-next"></use>
			</svg>
		</div>

		<div class="swiper-container" data-effect="fade" data-show-items="1" data-change-handler="thumbsParent" data-prev-next="1" data-autoplay="4000">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide stunning-header-bg13">

					<div class="container">
						<div class="row">
							<div class="col-lg-12">

								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="images/logo.png" alt="slider" style="height: 180px;">
									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="slider-content">

									<!--<h2 class="slider-content-title" data-swiper-parallax="-100">WEB EN CONSTRUCCION</h2>-->

									<p class="slider-content-text" data-swiper-parallax="-200" style="padding: 20px;">Prometeo es una fundación dirigida en crear productos personalizados para las personas, con el fin de dar inclusión social, basado en prótesis con tecnología avanzada y ergonómicas</p>

									<div class="universal-btn-wrapper">
										<!--<a href="" class="crumina-button button--blue button--l">CONTACTARNOS</a>-->
										<a href="#quienes-somos" class="crumina-button button--red button--l">¿QUIENES SOMOS?</a>
									</div>

								</div>

								

							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg3">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">Síguenos</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Elige la forma de contacto que más te acomode.</p>

									<div class="universal-btn-wrapper">
										<a href="https://www.instagram.com/prometeochile.cl/" target="_blank"><img src="images/icon-instagram.png" style="max-width: 100px;"></a>
										<a href="https://wa.me/56946579591" target="_blank"><img src="images/whatsapp.png" style="max-width: 100px;"></a>
										<a href="https://www.facebook.com/Prometeo-103394595459699/?ref=pages_you_manage" target="_blank"><img src="images/icon-fb.png" style="max-width: 100px;"></a>
										<a href="https://twitter.com/ChilePrometeo" target="_blank"><img src="images/twitter.png" style="max-width: 100px;"></a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="images/siguenos-prometeo.png" alt="slider">
								</div>
							</div>
						</div>
					</div>

				</div>

				<!--<div class="swiper-slide stunning-header-bg4">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider3.png" alt="slider">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">titulo opcional</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Diam quis enim lobortis scelerisque. Vitae tempus quam pellentesque nec nam aliquam sem. Feugiat scelerisque varius morbi enim nunc faucibus donec massa sapien faucibus.</p>

									<div class="universal-btn-wrapper">
										<a href="" class="crumina-button button--orange button--l">TEXTO</a>
										<a href="" class="crumina-button button--dark button--l">TEXTO</a>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg5">

					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">

								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">titulo opcional</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

									<div class="universal-btn-wrapper">
										<a href="" class="crumina-button button--dark button--l">TEXTO</a>
										<a href="" class="crumina-button button--yellow button--l">TEXTO/a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider4.png" alt="slider">
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg6">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">titulo opcional</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Imperdiet massa tincidunt nunc pulvinar. Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>

									<div class="universal-btn-wrapper">
										<a href="" class="crumina-button button--blue button--l">TEXTO</a>
										<a href="" class="crumina-button button--lime button--l">TEXTO</a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider5.png" alt="slider">
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg7">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider6.png" alt="slider">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">TITULO OPCIONES</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Imperdiet massa tincidunt nunc pulvinar. Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>

									<div class="universal-btn-wrapper">
										<a href="" class="crumina-button button--dark button--l">TEXTO</a>
										<a href="" class="crumina-button button--orange button--l">TEXTO</a>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>-->

			</div>

			<!--Pagination tabs-->

			<div class="slider-slides">
				<div class="container">
					<div class="row">
						<div class="slider-slides-wrap">
							<div class="slides-item slides-item-primary swiper-slide-active">
								<span class="slides-item-text">Bienvenido</span>
							</div>
							<div class="slides-item slides-item-red">
								<span class="slides-item-text">Siguenos</span>
							</div>
							<!--<div class="slides-item slides-item-orange">
								<span class="slides-item-text">texto</span>
							</div>
							<div class="slides-item slides-item-yellow">
								<span class="slides-item-text">texto</span>
							</div>
							<div class="slides-item slides-item-blue">
								<span class="slides-item-text">texto</span>
							</div>
							<div class="slides-item slides-item-lime">
								<span class="slides-item-text">texto</span>
							</div>-->
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section class="medium-section-padding bg-grey">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<h4>Colabora con nosotros</h4>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div id="formulario">
						<form method="post" id="formdata">
							<div class="input-btn--inline">
								<input class="input--white" type="email" placeholder="Ingresa tu correo" name="correo" id="correo" required>
								<button type="button" class="crumina-button button--primary button--l" id="botonenviar">ENVIAR</button>
							</div>
							<div id="exito" style="display:none;z-index: 1;color: rgb(0, 0, 0);; margin-bottom: 30px;">
			        		    Se ha producido un error durante el envío de datos.
			        		</div>
			        		<div id="fracaso" style="display:none;z-index: 1; color: rgb(0, 0, 0);; margin-bottom: 30px;">
			        		    <strong>Sus datos han sido recibidos con éxito.</strong>
			        		</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding" id="servicios">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center mr-auto ml-auto mb-5">
					<h2>SERVICIOS</h2>
					<p class="fs-18 fw-medium">Entregamos una propuesta vanguardista, y centrada en los intereses del usuario, creando productos completamente personalizados. Nuestro equipo se encuentra comprometido con la inclusión, y con la igualdad de oportunidades,  entendiendo a los usuarios de Prometeo Chile como sujetos de derecho. </p>
				</div>
			</div>
			<div class="row" id="iconos-servicios">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title" style="text-transform: uppercase;">Pro academy</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="images/pro-academy.png" alt="icon">

						</div>

						<!--<div class="info-box-content">
							<p class="info-box-text" style="text-align: justify; text-justify: inter-word;">Instancia donde queremos educar a la comunidad por medio de diferentes formatos, talleres de derechos humanos, impresion 3D, robotica educativa entre otros.</p>
						</div>-->

					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title" style="text-transform: uppercase;">Ayudas tecnicas</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="images/investigacion-prometeo.png" alt="icon">

						</div>

						<!--<div class="info-box-content">
							<p class="info-box-text" style="text-align: justify; text-justify: inter-word;">Esta instancia <strong>MAKERPRO</strong> es el corazón de nuestra iniciativa, ya que acá nosotros pretendemos concentrar a un equipo de investigación y desarrollo de ayudas técnicas,  para aplicar nuevas tecnologías, será  literalmente el equipo que materializa los productos que nosotros ofrecemos.
							Los dos proyectos actualmente en desarrollo son los de Thomas Águila y Leonardo</p>
						</div>-->

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title" style="text-transform: uppercase;">PRO PETS</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="images/pet-prometeo.png" alt="icon">

						</div>

						<!--<div class="info-box-content">
							<p class="info-box-text" style="text-align: justify; text-justify: inter-word;">No negamos la posibilidad de poder ayudar al mundo animal, por eso no dejamos de lado la posibilidad de también incluir dentro del rubro, a las mascotas y apoyar al mundo veterinario.</p>
						</div>-->

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding section-bg2" id="quienes-somos">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<h2 style="color: #fff;">Quiénes somos</h2>
					<p class="fs-18 fw-medium"><strong>Prometeo Chile</strong> es una fundación comprometida con la inclusión y la diversidad, que mediante la entrega de ayudas técnicas contribuye a mejorar la  calidad de vida de nuestros usuarios.<br><br>
					Contamos con un equipo interdisciplinario que utiliza sus conocimientos en robótica, tecnología y salud con el fin de entregar un servicio completo que dé respuesta a todas las necesidades biopsicosociales del usuario, siempre desde una perspectiva de derechos.<br><br>


					<strong>¿Por qué “PROMETEO”?</strong> porque en su nombre se conjugan los términos claves para nosotros, como:<strong> Prótesis Mecatrónicas Tecnologías y Órtesis</strong></p>
					<!--<div class="accordion crumina-module crumina-accordion accordion--style1 mt-5" id="accordion1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										TEXTO
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										TEXTO
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										TEXTO
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
					</div>-->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


					<img loading="lazy" src="images/Imagenes_onepage_quienes somos.png" alt="Prometeo">

				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding" id="directiva">
		<div class="container">
			<div class="row mb-5 align-center justify-content-center">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2>DIRECTIVA</h2>
					<p class="fs-18 fw-medium">Queremos acercar la ciencia y tecnología a las personas, apoyando la inclusión, la investigación y el desarrollo de ayudas técnicas.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard has-post-thumbnail">

						<div class="post-thumb">
							<img loading="lazy" style="" src="images/Imagenes_onepage_Ariel.png" alt="Ariel Bastias proyecto robotica Prometeo">
						</div>

						<div class="post-content">

							<div class="post-category-wrap">
								<a href="https://www.linkedin.com/in/ariel-bastias-849583b5" target="_blank" class="post-category">Linkedin</a>
							</div>

							<a class="post-title h6">Ariel Bastias - Ingeniero en Automatización y Robótica</a>

							<p>ariel@prometeochile.cl</p>

							<div class="post-text">
								<p><strong>¿Cómo puede aportar la robótica a una prótesis?</strong></p>
								<p style="font-style: italic">Hoy en dia, la adquisición de datos y el control de actuadores electromecánicos por medio de microcontroladores está muy en boga, a diferencia de años atrás, es de fácil acceso, podemos encontrar cada vez componentes más pequeños, económicos e integrados.<br><br> La biónica es la integración de la robótica con el cuerpo humano, se puede hacer un aporte de nivel industrial con un fin medicinal. Creo que en este nuevo mundo de cada vez más fácil acceso a la información, el internet de las cosas, y “machining learning” , podemos integrar nuevas tecnologías utilizadas en la mecatrónica para el uso de prótesis y diferentes adaptaciones. </p>
							</div>

							<div class="post-additional-info">

								<div class="author-posted">
									Posted by
									<a href="https://logoscapacitacion.com/" target="_blank" class="author">Logos Capacitacion & Desarrollo</a>
								</div>

							</div>

						</div>

					</article>
				</div>

				<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard has-post-thumbnail">

						<div class="post-thumb">
							<img loading="lazy" src="images/Imagenes_onepage_Danitza.png" alt="Technology">
						</div>

						<div class="post-content">

							<div class="post-category-wrap">
								<a href="LinkedIn.com/in/todaraya" target="_blank" class="post-category">Linkedin</a>
							</div>

							<a class="post-title h6">Danitza Araya - Terapéuta Ocupacional</a>

							<p>danitza@prometeochile.cl</p>

							<div class="post-text">
								<p><strong>¿Cuál es la importancia de la ergonomía para una prótesis?</strong></p>
								<p style="font-style: italic">Parto por aclarar el concepto de ergonomía, ya que muchas veces se relaciona con el estudio de puestos de trabajo, o directamente con el área laboral. La ergonomía es el conjunto de información sobre el usuario, aplicada a mejorar su calidad de vida. Esta información contiene, las medidas de su cuerpo, fuerza y biomecánica del segmento a evaluar, como también cuál es su rutina y qué uso quiere darle a la prótesis que queremos realizar.<br><br>  La importancia de la ergonomía, es que al tener toda esta información, podemos crear un producto exclusivo para el usuario, basado en sus características únicas, combinando seguridad, comodidad, y adaptabilidad al contexto en el que la prótesis quiere ser utilizada. Una prótesis 100% personalizada, de uso seguro y eficiente. </p>
							</div>

							<div class="post-additional-info">

								<div class="author-posted">
									Posted by
									<a href="https://logoscapacitacion.com/" target="_blank" class="author">Logos Capacitacion & Desarrollo</a>
								</div>

							</div>

						</div>

					</article>
				</div>-->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard has-post-thumbnail">

						<div class="post-thumb">
							<img loading="lazy" style="max-width: 95%;" src="images/Imagenes_onepage_wladimir.png" alt="Technology">
						</div>

						<div class="post-content">

							<div class="post-category-wrap">
								<a href="" class="post-category" >Linkedin</a>
							</div>

							<a class="post-title h6">Wladimir Silva - Psicólogo</a>

							<p>Wladimir@prometeochile.cl</p>

							<div class="post-text">
								<p><strong>¿De qué manera se realiza un seguimiento psicológico del usuario?</strong></p>
								<p style="font-style: italic">Manteniendo canales de contacto abiertos 24/7, hay que tener en cuenta que al usar una prótesis la “propiocepción” variará indudablemente, y esto podría eventualmente generar malestar en el usuario, para esto he puesto mi tiempo a disponibilidad del usuario, su entorno y bienestar psíquico.</p>
							</div>

							<div class="post-additional-info">

								<div class="author-posted">
									Posted by
									<a href="https://logoscapacitacion.com/" target="_blank" class="author">Logos Capacitacion & Desarrollo</a>
								</div>

							</div>

						</div>

					</article>
				</div>

				
			</div>
		</div>
	</section>

	<section class="pb120">
		<div class="container">
			<div class="row tabs tabs--style7">
				<div class="block-border-linear-gradient">
					<div class="block-border-linear-gradient-top"></div>
					<div class="block-border-linear-gradient-right"></div>
					<div class="block-border-linear-gradient-bottom"></div>
					<div class="block-border-linear-gradient-left"></div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="nav nav-tabs" id="myTab7" role="tablist">

						<a class="nav-item nav-link active" id="domains-tab" data-toggle="tab" href="#domains" role="tab" aria-controls="domains" aria-selected="true">
							Objetivos
						</a>

						<a class="nav-item nav-link" id="web-hosting-tab" data-toggle="tab" href="#web-hosting" role="tab" aria-controls="web-hosting" aria-selected="false">
							Donaciones
						</a>

						<!--<a class="nav-item nav-link" id="dedicated-server-tab" data-toggle="tab" href="#dedicated-server" role="tab" aria-controls="dedicated-server" aria-selected="false">
							Equipo
						</a>-->

					</div>
					<a href=""><img src="images/Imagenes_onepage_donaciones.png" style="max-width: 270px; margin-left: -70px"></a>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="tab-content" id="myTabContent7">
						<div class="tab-pane fade show active" id="domains" role="tabpanel" aria-labelledby="domains-tab">
							<h5 class="mb-2">¿Cual es el fin de Prometeo?</h5>
							<p class="mb-4">Ser un centro de referencia nacional,que va siempre a la vanguardia tecnológica,  que se destaque  por la excelencia de sus profesionales y por los servicios que se entregan en las áreas de tecnología, salud y educación. <a href="" class="weight-bold c-primary">Siendo un aporte a la sociedad chilena</a> al facilitar los procesos de inclusión.
							</p>
							<h5 class="mb-2">Público objetivo</h5>
							<p class="mb-4">Nuestros servicios están orientados a personas que requieran del uso de ayudas técnicas (prótesis, ortesis, adaptaciones del hogar, entre otras), como también a quienes quieran aumentar sus conocimientos en robótica, diseño y salud, con el fin de contribuir a tener una sociedad inclusiva.</p>
							<a href="#" class="crumina-button button--lime button--l mt-2">Contacto</a>
						</div>

						<div class="tab-pane fade" id="web-hosting" role="tabpanel" aria-labelledby="web-hosting-tab">
							<h5 class="mb-2">Por que donar?</h5>
							<p class="mb-4">De acuerdo al II Estudio Nacional de la Discapacidad el 16,7% de la población, se encuentra en situación de discapacidad, existen necesidades detectadas, que no tienen solución aún, muchas veces una prótesis o adaptación no puede ser costeada fácilmente, haz tu aporte y ayuda a que esta iniciativa facilite la vida de muchas personas.
							</p>
						</div>

						<!--<div class="tab-pane fade" id="dedicated-server" role="tabpanel" aria-labelledby="dedicated-server-tab">
							<h5 class="mb-2">Pregunta trees?</h5>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								<a href="#" class="weight-bold c-primary">Cras fermentum odio eu feugiat.</a> Aliquet lectus proin nibh nisl condimentum id. Viverra nibh cras pulvinar mattis nunc.
							</p>
							<h5 class="mb-2">Pregunta uno?</h5>
							<p class="mb-4">Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam. Facilisis sed odio morbi quis. Odio facilisis mauris sit amet massa vitae tortor.</p>
							<h5 class="mb-2">How do I choose a domain that stands out?</h5>
							<p>Nec dui nunc mattis enim. In mollis nunc sed id. Blandit libero volutpat sed cras ornare arcu dui vivamus. Lacus laoreet non curabitur gravida. Etiam sit amet nisl
								<span class="weight-bold">purus in mollis.</span> Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Iaculis nunc sed augue lacus.
							</p>
							<p class="mb-4">Tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<h5 class="mb-2">Pregunta uno?</h5>
							<p>Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam.
								<a href="#" class="c-primary">Facilisis sed odio morbi quis.</a> Odio facilisis mauris sit amet massa vitae tortor.
							</p>
							<a href="#" class="crumina-button button--lime button--l mt-2">CONTACTO</a>
						</div>-->

					</div>
				</div>
			</div>
		</div>
	</section>

</div>


<!-- Footer -->

<footer id="site-footer" class="footer footer--dark footer--with-decoration">

	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
				<!--<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Servicio 1
						</h5>
						<ul>
							<li>
								<a href="">
									Opcion
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									Opcion
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									Opcion
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									Opcion
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									Opcion
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>-->

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12 mb-lg-12">
					<div class="widget w-info text-center">
						<a href="index.php" class="site-logo">


							<img loading="lazy" src="images/logo.png" alt="logo" width="185">

						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						<ul class="socials">
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="images/whatsapp.png" alt="whatsapp">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="images/icon-fb.png" alt="facebook">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="images/icon-instagram.png" alt="instagram">

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-subscribe-panel">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<h5 class="footer-subscribe-panel-title text-white">SUBSCRIBE </h5>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<span class="footer-subscribe-panel-subtitle"><span class="font-weight-bold">Únase a nuestro equipo de apoyo al proyecto Prometeo.</span> Le enviaremos noticias.</span>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<form class="footer-subscribe-form">
						<div class="input-btn--inline">
							<input class="input--dark" type="text" placeholder="Su direccion de correo electronico…">
							<button type="button" class="crumina-button button--lime button--l">ENVIAR</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="sub-footer bg-black">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-0 mb-lg-0">
					<div class="copyright">
						<span>Copyright © 2020 <a href="index.html">Prometeo</a>, Designed by <a href="">Logos capacitacion & desarrollo</a> Developed by <a href="">Mauro Filipovich</a> Only on <a href="">Logos Capacitacion & Desarrollo</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-to-top" href="#">
		<svg class="crumina-icon">
			<use xlink:href="#icon-to-top"></use>
		</svg>
	</a>
</footer>

<!-- ... end Footer -->


<script src="js/jquery.min.js"></script>

<script src="js/Bootstrap/bootstrap.bundle.min.js"></script>

<script src="js/js-plugins/navigation.min.js"></script>
<!--<script src="js/js-plugins/select2.min.js"></script>-->
<script src="js/js-plugins/material.min.js"></script>
<script src="js/js-plugins/swiper.min.js"></script>
<!--<script src="js/js-plugins/jquery-countTo.min.js"></script>-->
<!--<script src="js/js-plugins/waypoints.min.js"></script>-->
<!--<script src="js/js-plugins/leaflet.min.js"></script>-->
<!--<script src="js/js-plugins/MarkerClusterGroup.min.js"></script>-->
<!--<script src="js/js-plugins/jquery.magnific-popup.min.js"></script>-->
<!--<script src="js/js-plugins/TimeCircles.min.js"></script>-->
<script src="js/js-plugins/smooth-scroll.min.js"></script>
<script src="js/js-plugins/jquery.matchHeight.min.js"></script>
<!--<script src="js/js-plugins/imagesLoaded.min.js"></script>-->
<!--<script src="js/js-plugins/isotope.pkgd.min.js"></script>-->
<!--<script src="js/js-plugins/ajax-pagination.min.js"></script>-->
<!--<script src="js/js-plugins/Chart.min.js"></script>-->
<!--<script src="js/js-plugins/chartjs-plugin-deferred.min.js"></script>-->


<script src="js/main.js"></script>
<!--<script src="js/js-plugins/leaflet-init.js"></script>-->

<!-- jQuery-scripts for Modules (Send Message) -->
<!--<script src="modules/forms/src/js/jquery.validate.min.js"></script>-->
<!--<script src="modules/forms/src/js/sweetalert2.all.js"></script>-->
<!--<script src="modules/forms/src/js/scripts.js"></script>-->

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>