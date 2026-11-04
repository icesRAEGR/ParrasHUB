<?php
$host = "localhost"; // Si usas XAMPP, esto debe ser "localhost"
$usuario = "root"; // En XAMPP, el usuario por defecto es "root"
$password = ""; // En XAMPP, por defecto la contraseña es vacía
$bd = "parras"; // Asegúrate de que el nombre de la BD es correcto

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $password, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Establecer la codificación de caracteres
$conexion->set_charset("utf8");

?>
