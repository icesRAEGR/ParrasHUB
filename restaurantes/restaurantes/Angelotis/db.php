<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambiar si es necesario
$username = "rut";     // Cambiar por tu usuario de MySQL
$password = "";  // Cambiar por tu contraseña de MySQL
$dbname = "parras";        // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
