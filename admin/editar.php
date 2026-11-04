<?php
include('conexion.php');

function editarUsuario($id, $nuevoNombre) {
    global $conexion;
    $sql = "UPDATE usuarios SET nombre = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("si", $nuevoNombre, $id);
    return $stmt->execute();
}

if (isset($_GET['id']) && isset($_POST['nuevo_nombre'])) {
    $id = $_GET['id'];
    $nuevoNombre = $_POST['nuevo_nombre'];
    if (editarUsuario($id, $nuevoNombre)) {
        echo "Nombre actualizado correctamente.";
    } else {
        echo "Error al actualizar el nombre.";
    }
}
?>