<?php
//Variables para la conexión con la base de datos
$host = 'localhost'; 
$dbname = 'agencia'; // Nombre de la base de datos
$username = "root"; 
$password = "Dami29"; 

try {
    // Se crea una instancia de PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Para que lance excepciones en caso de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Para que use el modo de emulación de sentencias preparadas
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Para que las transacciones utilicen el modo de confirmación automática
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, true);
    
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // Para capturar la excepción en caso de error y mostrar un mensaje
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    exit();
}
?>

