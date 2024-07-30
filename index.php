<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Semana5/style.css">
    <title>Agencia de Viajes</title>
    
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido/a a nuestra agencia de Viajes!</h1>
        <h2>Seleccione su próximo destino:</h2>
        <div class="search-container">
            <label for="destination">Destino:</label>
            <input type="text" id="destination" placeholder="Destino">
            <label for="travel-date">Fecha de Viaje:</label>
            <input type="date" id="travel-date">
            <button onclick="search()">Buscar</button>
        </div>
        <div id="results-container">
            <!-- Los resultados de la búsqueda -->
        </div>

        <!-- Notificaciones -->
        <?php include 'notificaciones.php'; ?>

        <h1>Paquetes Turísticos</h1>
        <h2>Seleccione un paquete turístico:</h2>
        <div class="package">
            <h2>Paquete 1</h2>
            <p>Paquete de hotel + vuelo a Japón</p>
            <p>7 noches - Noviembre</p>
            <p>$500.000</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="package_id" value="1">
                <input type="hidden" name="package_name" value="Paquete 1">
                <input type="hidden" name="package_price" value="500000">
                <button type="submit" name="add_to_cart">Agregar al Carrito</button>
            </form>
        </div>
        <div class="package">
            <h2>Paquete 2</h2>
            <p>Cenas y tour romanticos en París</p>
            <p>8 noches - Enero</p>
            <p>$700.000</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="package_id" value="2">
                <input type="hidden" name="package_name" value="Paquete 2">
                <input type="hidden" name="package_price" value="700000">
                <button type="submit" name="add_to_cart">Agregar al Carrito</button>
            </form>
        </div>
        <h1>Carrito de Compras</h1>
        <div class="cart">
            <?php include 'cart.php'; ?>
        </div>
    </div>

    <script src="/Semana5/eventos.js"></script>
    <script src="/Semana5/script.js"></script>
</body>
</html>

