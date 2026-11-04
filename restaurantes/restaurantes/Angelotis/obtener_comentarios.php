<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angelottis";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);

$comentarios = [];
while ($row = $result->fetch_assoc()) {
    $comentarios[] = $row;
}

header('Content-Type: application/json');
echo json_encode($comentarios);

$conn->close();
?>
