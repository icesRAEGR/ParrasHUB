<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "parras");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verifica si se enviaron los datos desde el formulario
if (isset($_POST['nombre'], $_POST['correo'], $_POST['usuario'], $_POST['contrasena'])) {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encripta la contraseña

    // Preparar la consulta SQL para evitar inyección SQL
    $stmt = $conexion->prepare("INSERT INTO registro (nombre, correo, usuario, contrasena) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $correo, $usuario, $contrasena);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
} else {
    echo "Error: No se recibieron todos los datos.";
}

$conexion->close();
?>