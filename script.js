const travelDestinations = [
    { destination: 'Paris', date: '2024-07-15' },
    { destination: 'Londres', date: '2024-08-20' },
    { destination: 'New York', date: '2024-08-20' },
    { destination: 'Tokyo', date: '2024-07-10' },
    { destination: 'Japón', date: '2024-09-10' },
    { destination: 'Argentina', date: '2024-09-12' },
    { destination: 'Paraguay', date: '2024-10-10' },
    { destination: 'Alemania', date: '2024-10-13' },
    { destination: 'Brasil', date: '2024-10-21' },
    { destination: 'Barcelona', date: '2024-11-25' }
];

// Clase que representa un paquete turístico
class PaqueteTuristico {
    constructor(destino, fecha, precio, descripcion) {
        this.destino = destino;
        this.fecha = fecha;
        this.precio = precio;
        this.descripcion = descripcion;
    }

    // Método para obtener la descripción completa del paquete
    obtenerDescripcionCompleta() {
        return `Destino: ${this.destino}<br>Fecha: ${this.fecha}<br>Precio: $${this.precio}<br>Descripción: ${this.descripcion}`;
    }
}

// Lista de paquetes turísticos
const paquetes = [
    new PaqueteTuristico('París', '2024-07-10', 150000, 'Un viaje romántico a la ciudad del amor.'),
    new PaqueteTuristico('Nueva York', '2024-07-15', 200000, 'Explora la Gran Manzana con sus icónicos lugares.'),
    new PaqueteTuristico('Tokyo', '2024-07-20', 250000, 'Descubre la mezcla de tradición y modernidad en Tokio.'),
    new PaqueteTuristico('Londres', '2024-07-25', 180000, 'Visita los lugares históricos de Londres.')
];

function search() {
    const destinationInput = document.getElementById('destination').value.toLowerCase();
    const dateInput = document.getElementById('travel-date').value;
    const resultsContainer = document.getElementById('results-container');
    
    resultsContainer.innerHTML = '';

    // Filtrar destinos de viaje
    const filteredDestinations = travelDestinations.filter(travel => {
        const matchesDestination = travel.destination.toLowerCase().includes(destinationInput);
        const matchesDate = !dateInput || travel.date === dateInput;
        return matchesDestination && matchesDate;
    });

    // Filtrar paquetes turísticos
    const filteredPackages = paquetes.filter(paquete => {
        const matchesDestination = paquete.destino.toLowerCase().includes(destinationInput);
        const matchesDate = !dateInput || paquete.fecha === dateInput;
        return matchesDestination && matchesDate;
    });

    // Mostrar resultados de destinos de viaje
    if (filteredDestinations.length > 0) {
        filteredDestinations.forEach(travel => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'result';
            resultDiv.innerHTML = `<strong>Destino:</strong> ${travel.destination}<br><strong>Fecha:</strong> ${travel.date}`;
            resultsContainer.appendChild(resultDiv);
        });
    }

    // Mostrar resultados de paquetes turísticos
    if (filteredPackages.length > 0) {
        filteredPackages.forEach(paquete => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'result-item';
            resultDiv.innerHTML = paquete.obtenerDescripcionCompleta();
            resultsContainer.appendChild(resultDiv);
        });
    }

    // Si no hay resultados en ambos casos
    if (filteredDestinations.length === 0 && filteredPackages.length === 0) {
        resultsContainer.innerHTML = 'No se encontraron destinos que coincidan con la búsqueda.';
    }
}

// Agregar evento al botón de búsqueda
document.addEventListener('DOMContentLoaded', () => {
    const searchButton = document.querySelector('button');
    searchButton.addEventListener('click', search);
});

