function validarFormularioHotel() {
    var nombreHotel = document.getElementById('nombreHotel').value;
    var ubicacion = document.getElementById('ubicacion').value;
    var habitacionesDisponibles = document.getElementById('habitacionesDisponibles').value;
    var tarifaNoche = document.getElementById('tarifaNoche').value;
    
    if (nombreHotel == "") {
        alert("Por favor ingrese el nombre del hotel.");
        return false;
    }
    if (ubicacion == "") {
        alert("Por favor ingrese la ubicación del hotel.");
        return false;
    }
    if (habitacionesDisponibles == "" || habitacionesDisponibles <= 0) {
        alert("Por favor ingrese una cantidad válida de habitaciones disponibles.");
        return false;
    }
    if (tarifaNoche == "" || tarifaNoche <= 0) {
        alert("Por favor ingrese una tarifa válida por noche.");
        return false;
    }
    return true;
}

