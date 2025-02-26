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
<!--
    <div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div> 
	-->
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