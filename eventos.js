// Función para generar notificación
function mostrarNotificacion(mensaje) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = mensaje;
    document.body.appendChild(notification);

    // Para eliminar notificación después de 10 segundos
    setTimeout(() => {
        notification.remove();
    }, 10000); // 10000 milisegundos (10 segundos)
}

// Función para verificar disponibilidad de paquetes turísticos y mostrar notificación
function verificarDisponibilidad() {
    setInterval(() => {

        const cambioDisponibilidad = Math.random() < 0.5; 
        if (cambioDisponibilidad) {
            mostrarNotificacion('¡Nuevas ofertas disponibles! Revisa los paquetes turísticos actualizados.');
        }
    }, 10000); // Verificar cada 10 segundos (10000 milisegundos)
}

// Función para mostrar notificación de oferta especial
function mostrarOfertaEspecial(oferta) {
    mostrarNotificacion(`¡Oferta especial en ${oferta.destino} por solo $${oferta.precio}! ${oferta.descripcion}`);
}

// Evento para muestra oferta especial
setTimeout(() => {
    const ofertaAleatoria = paquetes[Math.floor(Math.random() * paquetes.length)];
    mostrarOfertaEspecial(ofertaAleatoria);
}, 5000); // Mostrar oferta después de 5000 milisegundos (5 segundos)

document.addEventListener('DOMContentLoaded', verificarDisponibilidad);

