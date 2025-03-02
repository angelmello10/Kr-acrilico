<!DOCTYPE html>
<html lang="en">
<?php include"components/head.php"; ?>
  <body>	
	<header id="header">
	<?php include"components/nav.php"; ?>
    </header><!--/header-->	
	
	
	
	<section class="contact-page">
        <div class="container">
            <div class="text-center">        
                <h2>Solicita una cotización:</h2>
                <p>Nos pondremos en contacto contigo a la brevedad.</p>
            </div> 
            <?php include"components/formContact.php"; ?>
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.825231574701!2d-99.05016928572158!3d19.389913132606897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd1d9b7df0a9%3A0x45bc6d3961bcf94a!2sLic.%20Juan%20C.%20Doria%2010%2C%20Juan%20Escutia%2C%20Iztapalapa%2C%2009100%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1675355125297!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>



	<?php include("components/footer.php");
    include("components/boton-whats.php");?>
	
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