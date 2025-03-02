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
		<iframe src="">
		</iframe>
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