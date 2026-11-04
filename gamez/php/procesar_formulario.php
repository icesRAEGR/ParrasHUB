<?php
require 'conexion.php'; // Asegúrate de tener tu conexión en este archivo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accion = $_POST['accion'];
    $id = $_POST['producto_id'] ?? null;
    $nombre = $_POST['nombre'] ?? '';
    $codigo = $_POST['codigo'] ?? '';
    $cantidad = $_POST['cantidad'] ?? 0;
    $precio = $_POST['precio'] ?? 0.00;

    switch ($accion) {
        case 'registrar':
            $stmt = $conexion->prepare("INSERT INTO productos (nombre, codigo, cantidad, precio) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssii", $nombre, $codigo, $cantidad, $precio);
            $stmt->execute();
            echo "Producto registrado correctamente";
            break;

        case 'buscar':
            $stmt = $conexion->prepare("SELECT * FROM productos WHERE codigo = ?");
            $stmt->bind_param("s", $codigo);
            $stmt->execute();
            $resultado = $stmt->get_result()->fetch_assoc();
            echo json_encode($resultado);
            break;

            case 'editar':
                $stmt = $conexion->prepare("UPDATE productos SET nombre = ?, cantidad = ?, precio = ? WHERE id = ?");
                $stmt->bind_param("sidi", $nombre, $cantidad, $precio, $id);
                $stmt->execute();
                echo "Producto actualizado correctamente";
                break;

        case 'eliminar':
            $stmt = $conexion->prepare("DELETE FROM productos WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            echo "Producto eliminado correctamente";
            break;
    }
    $stmt->close();
    $conexion->close();
}
?>
