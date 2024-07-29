<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana6/style.css">
    <title>Formulario de Registro de Vuelos</title>
    <script src="/Semana6/validarFormularioVuelo.js"></script>  
</head>
<body>
    <h1>Registro de Vuelos</h1>
    <form action="procesar_registro_vuelo.php" method="post" onsubmit="return validarFormularioVuelo()">
        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen" required><br><br>

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required><br><br>

        <label for="fechaVuelo">Fecha de Vuelo:</label>
        <input type="datetime-local" id="fechaVuelo" name="fechaVuelo" required><br><br>

        <label for="plazasDisponibles">Plazas Disponibles:</label>
        <input type="number" id="plazasDisponibles" name="plazasDisponibles" min="1" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <button type="submit">Registrar Vuelo</button>
    </form>
</body>
</html>
