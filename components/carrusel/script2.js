const images = document.querySelectorAll('.carousel-image');
let currentIndex = 0;

// Función para actualizar la imagen activa
function updateCarousel() {
    images.forEach((img, index) => {
        img.classList.remove('active');
        if (index === currentIndex) {
            img.classList.add('active');
        }
    });

    // Avanzar al siguiente índice
    currentIndex = (currentIndex + 1) % images.length;
}

// Cambiar imagen automáticamente cada 2 segundos
setInterval(updateCarousel, 2000);

// Inicializar carrusel
updateCarousel();
