document.addEventListener("DOMContentLoaded", function () {
  // Lista de imágenes del carrusel
  var images = ["img/img2Carrusel1.jpg", "img/img1Carrusel.jpg"];
  var loadedImages = 0;
  var slider = document.getElementById("slider");

  // Mostrar el primer elemento del carrusel inmediatamente
  if (slider) {
    var firstElement = slider.getElementsByTagName("li")[0];
    if (firstElement) {
      firstElement.style.opacity = 1; // Hacer visible el primer elemento
      firstElement.style.zIndex = 1; // Asegurar que esté en la parte superior
    }
  }

  // Precargar imágenes
  images.forEach(function (imageUrl) {
    var img = new Image();
    img.src = imageUrl;
    img.onload = function () {
      loadedImages++;
      // Cuando todas las imágenes estén cargadas, hacer visible el carrusel
      if (loadedImages === images.length) {
        slider.classList.add("visible");
      }
    };
  });

  // Cambiar la imagen cada 5 segundos
  if (slider) {
    setInterval(() => fntExecuteSlide("next"), 3000);
  }
});

// Función para cambiar las imágenes
function fntExecuteSlide(side) {
  let parentTarget = document.getElementById("slider");
  if (!parentTarget) return;

  let elements = parentTarget.getElementsByTagName("li");
  if (elements.length === 0) return;

  let curElement, nextElement;

  // Encuentra el elemento actualmente visible (con opacidad 1)
  for (var i = 0; i < elements.length; i++) {
    if (elements[i].style.opacity == 1) {
      curElement = i;
      break;
    }
  }

  // Si no se encuentra el elemento actual, lo asignamos al primero
  if (curElement === undefined) curElement = 0;

  // Establece el siguiente elemento según el valor de 'side'
  if (side == "prev" || side == "next") {
    if (side == "prev") {
      nextElement = curElement == 0 ? elements.length - 1 : curElement - 1;
    } else {
      nextElement = curElement == elements.length - 1 ? 0 : curElement + 1;
    }
  } else {
    nextElement = side;
    side = curElement > nextElement ? "prev" : "next";
  }

  // Cambia la opacidad y el z-index de los elementos para realizar la transición
  elements[curElement].style.opacity = 0;
  elements[curElement].style.zIndex = 0;
  elements[nextElement].style.opacity = 1;
  elements[nextElement].style.zIndex = 1;
}
