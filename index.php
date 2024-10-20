<?php
$host = getenv('RAILWAY_HOST');
$db   = getenv('RAILWAY_DATABASE');
$user = getenv('RAILWAY_USER');
$pass = getenv('RAILWAY_PASSWORD');
$port = getenv('RAILWAY_PORT');

$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
?>