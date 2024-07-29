function validarFormularioVuelo() {
    var origen = document.getElementById('origen').value;
    var destino = document.getElementById('destino').value;
    var fechaVuelo = document.getElementById('fechaVuelo').value;
    var plazasDisponibles = document.getElementById('plazasDisponibles').value;
    var precio = document.getElementById('precio').value;
    
    if (origen == "") {
        alert("Por favor ingrese el origen del vuelo.");
        return false;
    }
    if (destino == "") {
        alert("Por favor ingrese el destino del vuelo.");
        return false;
    }
    if (fechaVuelo == "") {
        alert("Por favor ingrese la fecha del vuelo.");
        return false;
    }
    if (plazasDisponibles == "" || plazasDisponibles <= 0) {
        alert("Por favor ingrese una cantidad válida de plazas disponibles.");
        return false;
    }
    if (precio == "" || precio <= 0) {
        alert("Por favor ingrese un precio válido.");
        return false;
    }
    return true;
}
