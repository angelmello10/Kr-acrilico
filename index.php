<!DOCTYPE html>
<html lang="en">
<?php include"components/head.php"; ?>
  <body>	
	
  <header id="header">
		<?php include"components/nav.php"; ?><!--/Barra Nav-->	
</header><!--/header-->	
	
  
	<?php include("components/carrusel.php");?>
	
	
	<div class="about">
		<div class="container">
			<div class="text-center">
				<h2>Materiales con los que diseñamos</h2>
				<div class="col-md-10 col-md-offset-1">
					<p>En <strong>K&R Acrílicos</strong>, trabajamos con una amplia gama de materiales acrílicos y complementarios para crear productos innovadores, resistentes y estéticamente atractivos. Todos nuestros materiales cumplen con la mejor calidad y durabilidad, lo que nos permite ofrecer soluciones personalizadas para cualquier necesidad.</p>
					<p ><strong>Consulta aquí nuestros servicios y encuentra lo que buscas:</p>
					<div class="gamp-btn"><a href="services.php">Servicios</a></div>
				</div>
			</div>	
		</div>			
	</div>
	<hr>
<!--
	<div class="services">
		<div class="container">
			<div class="text-center">
				<h2>consectetur adipisicing elit</h2>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<i class="fa fa-heart-o"></i>
				<h3>Fully Responsive</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<i class="fa fa-cloud"></i>
				<h3>Retina Ready</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<i class="fa fa-book"></i>	
				<h3>Fresh and Clean</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				<i class="fa fa-gear"></i>	
				<h3>Easy to Customize</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
		</div>			
	</div>
	-->	
	
	<div class="gallery">
		<div class="text-center">
			<h2>Productos</h2>
			
		</div>
		<div class="container">		
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/producto1.png" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Expositor Acrílico Transparente</h4>
						<p>Apilable para Productos a Granel 320 x 410 x 320 mm</p>				
					</figcaption>			
				</figure>
			</div>
			
			<div class="col-md-4">							
				<figure class="effect-marley">
					<img src="img/img2Carrusel1.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Portaretrato</h4>
						<p>Acrílico doble Cristal/marco De Fotos - 25 x 15 cm</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/caja.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Caja de acrílico con tapa Bar</h4>
						<p>Artículos de oficina Té de café 20 x 10 x 10 cm</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/prod4.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Organizador De Acrílico</h4>
						<p>Ideal para organizar productos de belleza y accesorios. Incluye 2 piezas desmontables. Úsalo en otros espacios como estudio.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/prod7.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Exhibidor</h4>
						<p>Hecho de acrílico - medidas: 25 x 18 cm</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/product8.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Porta Flyers</h4>
						<p>Medidas: 30 x 10 CM</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
	</div>
	<section class="action">
		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Nuestros Productos</h4>
				<ul style="font-size: 17px; color:black; line-height:1.8;">
					<li>🔹 Exhibidores y displays para tiendas y negocios.</li>
					<li>🔹 Letreros y señalización con acabados profesionales.</li>
					<li>🔹 Artículos promocionales personalizados para empresas.</li>
					<li>🔹 Decoración con un toque moderno y elegante.</li>
				</ul>
			</div>
			<div class="right-image hidden-xs"></div>
		</div>
	</section>
	<hr>
	<?php include("components/footer.php");
	include("components/boton-whats.php");
	?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>
