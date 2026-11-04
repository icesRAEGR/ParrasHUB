<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario no es root
$password = ""; // Cambia esto si tienes contraseña
$dbname = "parras"; // Cambia al nombre de tu base de datos

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

// Insertar datos en la tabla
$sql = "INSERT INTO comentarios (nombre, correo, comentario) VALUES ('$nombre', '$correo', '$comentario')";
if ($conn->query($sql) === TRUE) {
    echo "Comentario guardado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
