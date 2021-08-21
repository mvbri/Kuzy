<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php include "_partials/config.php" ?>
    <?php include "_partials/head.php" ?>

	<meta property="og:title" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">		
	<meta name="twitter:title" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">
	<meta name="dcterms.title" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">
	<meta name="DC.title" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">
	<meta name="application-name" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">
	<meta name="title" content="👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso">
	<title>👠✨ Kuzy.pe ✨ 👞 Alegría en cada paso</title>

	<link href="https://fonts.googleapis.com/css2?family=Exo+2" rel="stylesheet">    
    <link rel="stylesheet" href="_private/css/pages/core.css">
    <link rel="stylesheet" type="text/css" href="_private/vendors/owl/olw.css">
</head>

<body id="site" class="site">
	

	<?php include "_partials/tagmanager.php" ?>


    <header id="site-header" class="site-header site-header-home cleaner">
		<div class="contenedor contenedor-principal">
            <div class="group group-principal">
				<div class="contenedor-general">
					<img class="logo" src="_private/img/logo.svg" alt="logo">
					<span class="line-pink line-pink-circle line-pink-width-1"></span>
				    <h1 class="main-title font-size-xxl color-secondary">Alegría en<br class="salto"> cada<br class="salto-2">  paso</h1>
				</div>
				<a href="catalogo" class="button-basic button-primary background-quaternary color-secondary font-size-xs button-decoration-line">QUIERO VER TODO</a>
			</div>
			<div class="contenedor-carousel-principal">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img class="img-destacada" src="<?php echo $modelos_path; ?>/modelo-53/modelo-53.3.jpg" alt="">
					</div>
					<div class="item">
						<img class="img-destacada" src="<?php echo $modelos_path; ?>/modelo-38/modelo-38.3.jpg" alt="">
					</div>
					<div class="item">
						<img class="img-destacada" src="<?php echo $modelos_path; ?>/modelo-5/modelo-5.1.jpg" alt="">
					</div>
					<div class="item">
						<img class="img-destacada" src="<?php echo $modelos_path; ?>/modelo-52/modelo-52.3.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<a href="https://api.whatsapp.com/send?phone=51992166412" class="contenedor-social-whatsapp button-basic button-quaternary" target="_blank">
			<img src="_private/img/icons/icon-whatsapp.svg" class="icon-whatsapp">	<span class="icon-whatsapp-text color-secondary">+51 992166412</span>
		</a>
    </header>
    <main id="site-main" class="site-main cleaner"> 

    	<section class="seccion seccion-1">
			<div class="contenedor contenedor-principal-info">
				<div class="group group-secundario">
					<div class="contenedor-general">
                        <h2 class="font-size-xl color-primary">Sitema de<br class="salto"> apartado</h2>
					    <span class="line-pink line-pink-circle-2 line-pink-width-2"></span>
					</div>
				 </div>
				 <div class="contenedor contenedor-info contenedor-info-movil-2">
					<div class="group-contenido pedido-info-1">
						<div class="fondo-circle fondo-circle-1 font-size-md"></div>
						<h3 class="color-terciary font-size-lg">Seleccionar</h3>
						<hr class="line-pink line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary">
							Entra al catálogo<br> y elije tu modelo 
						</p>
					</div>
					<div class="group-contenido pedido-flechas"></div>
					<div class="group-contenido pedido-info-2">
						<div class="fondo-circle fondo-circle-2 font-size-md"></div>
						<h3 class="color-terciary font-size-lg">Cotizar</h3>
						<hr class="line-pink line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary">
							Ver disponibilidad<br> y precios
						</p>	
					</div>
					<div class="group-contenido pedido-flechas"></div>
					<div class="group-contenido pedido-info-3">
						<div class="fondo-circle fondo-circle-3 font-size-md"></div>
						<h3 class="color-terciary font-size-lg">Separar</h3>
						<hr class="line-pink line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary">
							Has tuyo<br> el calzado
						</p>	
					</div>
				</div>
			</div>
		</section> 

		
		<section class="seccion seccion-2">
            <div class="contenedor contenedor-principal-modelos">
                <div class="group group-secundario">
					<div class="contenedor-general">
                        <h2 class="font-size-xl color-primary">Nuestro modelos</h2>
					    <span class="line-pink line-pink-circle line-pink-width-2 line-pink-left-movil"></span>
					</div>	
				</div>
			    <div class="contenedor-principal-galeria">
				    <div class="contenedor-galeria">
						<div class="galeria-item">
							<img src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.1.jpg"  onclick="openModal('<?php echo $modelos_path; ?>','modelo-1');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item">
							<img src="<?php echo $modelos_path; ?>/modelo-2/modelo-2.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-2');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item">
							<img src="<?php echo $modelos_path; ?>/modelo-3/modelo-3.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-3');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item">
							<img src="<?php echo $modelos_path; ?>/modelo-4/modelo-4.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-4');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item">
							<img src="<?php echo $modelos_path; ?>/modelo-5/modelo-5.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-5');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item display">
							<img src="<?php echo $modelos_path; ?>/modelo-6/modelo-6.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-6');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item display">
							<img src="<?php echo $modelos_path; ?>/modelo-9/modelo-9.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-9');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item display">
							<img src="<?php echo $modelos_path; ?>/modelo-10/modelo-10.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-10');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item display">
							<img src="<?php echo $modelos_path; ?>/modelo-11/modelo-11.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-11');"  class="galeria-img hover-shadow" alt="">
							<a class="contenedor-icon-heart" href="javascript:void(0)">
								<span class="icon-heart"></span>
							</a>
						</div>
						<div class="galeria-item-dos">
							<div class="galeria-item galeria-item-doble">
								<img src="<?php echo $modelos_path; ?>/modelo-7/modelo-7.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-7');"  class="galeria-img hover-shadow" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item galeria-item-doble">
								<img src="<?php echo $modelos_path; ?>/modelo-8/modelo-8.1.jpg" onclick="openModal('<?php echo $modelos_path; ?>','modelo-8');"  class="galeria-img hover-shadow" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
						</div>
					</div>
					<a href="catalogo" class="button-basic button-primary button-modal background-quaternary color-secondary font-size-xs button-decoration-line">QUIERO VER TODO</a>
					<!-- The Modal/Lightbox -->
                    <div id="myModal" class="modal">
	                    <div class="modal-content">
							<span class="close cursor" onclick="closeModal()">&times;</span>
	                        <div class="mySlides">
		                        <img id="modalDisplay" src="" style="width:100%">
	                        </div>
							
							<!-- Thumbnail image controls -->
							<div class="contenedor-img-control">
								<div class="contenedor-img-demo">
									<img class="demo" src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.1.jpg" onclick="currentSlide(1)" alt="Modelo 1">
								</div>
	  
								<div class="contenedor-img-demo">
									<img class="demo" src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.2.jpg" onclick="currentSlide(2)" alt="Modelo 2">
								</div>
	  
								<div class="contenedor-img-demo">
									<img class="demo" src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.3.JPG" onclick="currentSlide(3)" alt="Modelo 3">
								</div>
	  
								<div class="contenedor-img-demo">
									<img class="demo" src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.4.jpg" onclick="currentSlide(4)" alt="Modelo 4">
								</div>
								<a class="prev" onclick="prevSlide()">
									<img src="_private/img/arrow-left-modal.svg" alt="">
								</a>
								<a class="next" onclick="nextSlide()">
									<img src="_private/img/arrow-right-modal.svg" alt="">
								</a>
							</div>
							<a href="https://api.whatsapp.com/send?phone=51992166412" class="button-basic button-primary button-modal background-quaternary color-secondary font-size-xs button-decoration-line" target="_blank">Pedir ahora</a>
						</div>
                    </div>		
				</div>
				<div class="contenedor-principal-galeria-movil">
				    <div class="contenedor-galeria-movil">
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-32/modelo-32.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-20/modelo-20.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-23/modelo-23.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-32/modelo-32.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-20/modelo-20.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
							<div class="galeria-item">
								<img class="galeria-img" src="<?php echo $modelos_path; ?>/modelo-23/modelo-23.1.jpg" alt="">
								<a class="contenedor-icon-heart" href="javascript:void(0)">
									<span class="icon-heart"></span>
								</a>
							</div>
					</div>
					<a href="catalogo" class="button-basic button-secondary button-secondary-movil color-secondary font-size-xs button-decoration-line-2 button-decoration-line-movil-2">MIRA AQUÍ TODOS<br> NUESTRO MODELOS</a>
			    </div>
			</div>
		
		</section>
		

		<section class="seccion secccion-3">
			<div class="contenedor contenedor-principal-info">
                <div class="group group-secundario">
					<div class="contenedor-general">
                        <h2 class="font-size-xl color-primary">Porqué elegirnos</h2>
				        <span class="line-pink line-pink-circle line-pink-width-2"></span>
					</div>
				</div>
				<div class="contenedor contenedor-info">
					<div class="group-contenido elegirnos-info-1">
						<h3 class="color-terciary font-size-lg font-size-xs-two-movil">Cuero trujillano</h3>
						<hr class="line-pink-info line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary font-size-xxs-movil">
							Trabajamos directo con<br> proveedores Trujillanos
						</p>
					</div>
					<div class="group-contenido elegirnos-info-2">
						<h3 class="color-terciary font-size-lg font-size-xs-two-movil">Variedad</h3>
						<hr class="line-pink-info line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary font-size-xxs-movil">
							Variedad de modelos<br> para cada ocasión
						</p>	
					</div>
					<div class="group-contenido elegirnos-info-3">
						<h3 class="color-terciary font-size-lg font-size-xs-two-movil">Stock</h3>
						<hr class="line-pink-info line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary font-size-xxs-movil">
							Control de stock<br> y abastecimiento
						</p>	
					</div>
					<div class="group-contenido elegirnos-info-4">
						<h3 class="color-terciary font-size-lg font-size-xs-two-movil">Consultas online</h3>
						<hr class="line-pink-info line-pink-circle-3 line-pink-width-3 line-pink-left-3">
						<p class="font-size-xs color-terciary font-size-xxs-movil">
							Conectados<br> 100% digital
						</p>	
					</div>
				</div>
		    </div>
		</section>

		<section class="seccion seccion-4">
            <div class="contenedor contenedor-principal-info">
	            <div class="group group-secundario">
					<div class="contenedor-general">
                        <h2 class="font-size-xl color-primary">Aprovecha nuestras<br class="salto"> promociones</h2>
					    <span class="line-pink line-pink-circle-2 line-pink-width-2">
					</div>
				 </div>
				 <div class="contenedor contenedor-info contenedor-promo">
					 <div class="contenedor-fondo-gris contenedor-fondo-gris-promo">
						<div class="text-center text-promo"> 
                            <img src="<?php echo $modelos_path; ?>/modelo-28/modelo-28.2.jpg" alt="">
						</div>
					 </div>
					 <div class="contenedor-fondo-gris contenedor-fondo-gris-promo">
						 <div class="text-center text-promo">
							<img src="<?php echo $modelos_path; ?>/modelo-23/modelo-23.1.jpg" alt="">
						 </div>
					</div>
				 </div>			
			</div>  
		</section>      
    </main>
    <footer id="site-footer" class="site-footer">
	    <?php include "_partials/footer.php" ?>
	</footer>
	<script src="_private/vendors/jquery.min.js"></script>
	<script src="_private/vendors/owl/owl.carousel.min.js"></script>
	<script src="_private/vendors/owl/owl.animate.js"></script>
	<script src="_private/js/pages/home.js"></script>
</body>
</html>
