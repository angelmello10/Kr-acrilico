<!DOCTYPE html>
<html lang="en">
<?php include "components/head.php"; ?>
  <body>    
    <header id="header">
      <?php include "components/nav.php"; ?>    
      <style>
        /* Estilos para los botones de paginación */
        .page-btn {
          background-color:rgb(104, 190, 247); /* Color de fondo azul */
          color: white;              /* Texto blanco */
          border: none;              /* Sin borde */
          padding: 10px 20px;        /* Espaciado interno */
          font-size: 16px;           /* Tamaño de texto */
          font-weight: 600;          /* Peso de la fuente */          
          margin: 5px;               /* Espaciado entre los botones */
          cursor: pointer;          /* Cambiar cursor a mano */
          transition: all 0.3s ease; /* Transición suave */
        }

        /* Efecto hover para los botones */
        .page-btn:hover {
          background-color: #2980b9; /* Color más oscuro al pasar el cursor */
          transform: scale(1.1);      /* Aumenta ligeramente el tamaño */
        }

        /* Estilos para los botones activos */
        .page-btn.active {
          background-color: #e74c3c; /* Color rojo para el botón activo */
          transform: scale(1.1);      /* Mantener tamaño aumentado */
        }

        /* Estilos generales para el contenedor de la paginación */
        #paginationContainer {
          display: flex;
          justify-content: center;    /* Centra los botones */
          flex-wrap: wrap;            /* Permite que los botones se ajusten en filas si es necesario */
          margin-top: 50px;
          margin-bottom: 30px;
        }
      </style>

    </header><!--/header-->    
    
    <div class="gallery">
      <div class="text-center">
        <h2>Catálogo de productos</h2>
        <p style="font-size: 20px;">Estos son algunos de los productos los cuales diseñamos y fabricamos.</p>
      </div>
      <div id="paginationContainer" class="text-center mt-4"></div>
      <!-- Contenedor de productos -->
      <div class="container" id="productContainer"></div>
      
      <!-- Contenedor de la paginación -->
      
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
      
      let currentPage = 1;
      const productsPerPage = 9;
      let products = [];  // Array para almacenar los productos

      async function fetchProducts() {
        try {
          const response = await fetch('get_products.php');
          const data = await response.json();
          
          // Asegúrate de que la respuesta es válida
          if (!data) {
            console.error("No se han obtenido productos");
            return;
          }

          products = Object.values(data); // Convertir la respuesta a un array de productos
          displayProducts();
          generatePagination();
        } catch (error) {
          console.error("Error al obtener los productos:", error);
        }
      }

      function displayProducts() {
        const productContainer = document.getElementById('productContainer');
        productContainer.innerHTML = ''; // Limpiar el contenedor de productos

        // Calcular el rango de productos que se deben mostrar
        const startIndex = (currentPage - 1) * productsPerPage;
        const endIndex = startIndex + productsPerPage;
        const productsToDisplay = products.slice(startIndex, endIndex);

        // Mostrar los productos correspondientes a la página actual
        productsToDisplay.forEach(product => {
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

      function generatePagination() {
        const totalPages = Math.ceil(products.length / productsPerPage);
        const paginationContainer = document.getElementById('paginationContainer');
        paginationContainer.innerHTML = ''; // Limpiar paginación anterior

        // Generar botones de paginación
        for (let i = 1; i <= totalPages; i++) {
          const pageButton = `<button class="page-btn" onclick="changePage(${i})">${i}</button>`;
          paginationContainer.innerHTML += pageButton;
        }
      }

      function changePage(page) {
        currentPage = page;
        displayProducts();
      }

      // Inicializar la carga de productos y la paginación al cargar la página
      fetchProducts();
    </script>    
  </body>
</html>
