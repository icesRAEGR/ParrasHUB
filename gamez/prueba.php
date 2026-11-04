<?php

// Verifica si los datos fueron enviados correctamente
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;

if ($nombre && $correo && $usuario && $contrasena) {
    // Inserta en la base de datos
    $sql = "INSERT INTO registro (nombre, correo, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "Error: No se recibieron todos los datos.";
}

// Cierra la conexión
$conexion->close();
?>