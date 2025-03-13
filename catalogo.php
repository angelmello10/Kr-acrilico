<!DOCTYPE html>
<html lang="en">
<?php include "components/head.php"; ?>
  <body>    
    <header id="header">
      <?php include "components/nav.php"; ?>    
    </header><!--/header-->    
    
    <div class="gallery">
      <div class="text-center">
        <h2>Catálogo de productos</h2>
        <p style="font-size: 20px;">Estos son algunos de los productos los cuales diseñamos y fabricamos.</p>
      </div>
      
      <!-- Contenedor de productos -->
      <div class="container" id="productContainer"></div>
      
    </div>    
    
    <?php include("components/footer.php"); ?>
    <?php include("components/boton-whats.php"); ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>        
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/wow.min.js"></script>
    <script>
      wow = new WOW().init();
      
      async function fetchProducts() {
        try {
          const response = await fetch('get_products.php');
          const products = await response.json();

          const productContainer = document.getElementById('productContainer');
          productContainer.innerHTML = '';

          if (products) {
            Object.keys(products).forEach(key => {
              const product = products[key];
              const productElement = `
                <div class="col-md-4">
                  <figure class="effect-marley">
                    <img src="${product.url}" alt="${product.nombre}" class="img-responsive"/>
                    <figcaption>
                      <h4>${product.nombre}</h4>
                      <p>${product.descripcion}</p>              
                    </figcaption>          
                  </figure>
                </div>
              `;
              productContainer.innerHTML += productElement;
            });
          }
        } catch (error) {
          console.error("Error al obtener los productos:", error);
        }
      }

      fetchProducts(); // Cargar productos al iniciar
    </script>    
  </body>
</html>
