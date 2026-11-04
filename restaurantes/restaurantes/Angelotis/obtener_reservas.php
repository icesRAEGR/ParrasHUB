<?php
include 'db.php'; // Incluir el archivo de conexión a la base de datos

// Consulta SQL para obtener todas las reservas
$sql = "SELECT * FROM restauranteangelottis ORDER BY fecha, hora ASC";
$result = $conn->query($sql);

$reservas = [];

if ($result->num_rows > 0) {
    // Recorrer las filas de la tabla y guardarlas en un arreglo
    while ($row = $result->fetch_assoc()) {
        $reservas[] = $row;
    }
}

// Devolver las reservas en formato JSON
echo json_encode($reservas);

$conn->close(); // Cerrar la conexión
?>
