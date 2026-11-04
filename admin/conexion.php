<?php
$host = 'localhost';  // Cambia esto por tu host
$usuario = 'root';    // Tu usuario de MySQL
$clave = '';          // Tu clave de MySQL
$bd = 'parras';  // Nombre de tu base de datos

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $clave, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>