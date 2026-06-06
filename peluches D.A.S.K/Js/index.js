let index = 0;
const slides = document.querySelector(".slides");
const totalSlides = document.querySelectorAll(".slide").length;

function moverCarrusel() {
    index++;

    if (index >= totalSlides) {
        index = 0;
    }

    slides.style.transform = `translateX(-${index * 100}%)`;
}

// movimiento automático
setInterval(moverCarrusel, 3000);

// botón comprar
function comprar(producto) {
    alert("Agregado al carrito: " + producto);
}

