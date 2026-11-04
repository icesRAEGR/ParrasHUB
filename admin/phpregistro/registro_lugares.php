<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "parras";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se enviaron los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $horario = $_POST['horario'];
    $precio = $_POST['precio'];

    // Insertar datos en la tabla
    $sql = "INSERT INTO informacion (nombre, direccion, horario, precio) 
            VALUES ('$nombre', '$direccion', '$horario', $precio)";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>