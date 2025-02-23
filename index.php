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
				</div>
		
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="btn-gamp"><a href="services.php">Leer más...</a></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="gamp-btn"><a href="#">Servicios</a></div>
				</div>
			</div>	
		</div>			
	</div>
	<hr>
	
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
	
	<section class="action">
		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Amet porro numquam ratione</h4>
				<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
			</div>
			<div class="right-image hidden-xs"></div>
		</div>
	</section>
	
	<div class="gallery">
		<div class="text-center">
			<h2>Gallery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident </p>
		</div>
		<div class="container">		
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/8.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/9.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/10.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/11.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/12.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="img/13.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
	</div>
		
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