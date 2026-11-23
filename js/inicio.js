const imagenes = document.querySelector('.imagenes');
const botones = document.querySelectorAll('.navegacion button');
const indicadores = document.querySelectorAll('.indicadores div');
let indiceActual = 0;
const totalImagenes = indicadores.length;

function mostrarImagen(indice) {
    imagenes.style.transform = `translateX(-${indice * 100}%)`;
    indicadores.forEach(ind => ind.classList.remove('activo'));
    indicadores[indice].classList.add('activo');
}

botones[0].addEventListener('click', () => {
    indiceActual = (indiceActual > 0) ? indiceActual - 1 : totalImagenes - 1;
    mostrarImagen(indiceActual);
});

botones[1].addEventListener('click', () => {
    indiceActual = (indiceActual < totalImagenes - 1) ? indiceActual + 1 : 0;
    mostrarImagen(indiceActual);
});

indicadores.forEach(ind => {
    ind.addEventListener('click', () => {
        indiceActual = parseInt(ind.getAttribute('data-index'));
        mostrarImagen(indiceActual);
    });
});

// Navegación automática
setInterval(() => {
    indiceActual = (indiceActual < totalImagenes - 1) ? indiceActual + 1 : 0;
    mostrarImagen(indiceActual);
}, 3000); // Cambiar cada 3 segundos