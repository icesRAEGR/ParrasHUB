<?php
$servername = "localhost";
$username = "root"; // Cambia por tu usuario
$password = ""; // Cambia por tu contraseña
$dbname = "gamez"; // Cambia por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
