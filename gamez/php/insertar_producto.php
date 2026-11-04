<?php
include 'conexion.php'; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $codigo = $_POST['codigo'];

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($cantidad) && !empty($precio) && !empty($codigo)) {
        // Preparar la consulta SQL
        $sql = "INSERT INTO productos (nombre, cantidad, precio, codigo) VALUES (?, ?, ?, ?)";

        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param("sids", $nombre, $cantidad, $precio, $codigo);

            if ($stmt->execute()) {
                echo "<script>alert('Producto registrado con éxito.'); window.location.href='index.html';</script>";
            } else {
                echo "<script>alert('Error al registrar el producto: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error en la preparación de la consulta.');</script>";
        }
    } else {
        echo "<script>alert('Todos los campos son obligatorios.');</script>";
    }

    $conexion->close();
}
?>
