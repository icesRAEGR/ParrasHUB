<?php
include('conexion.php');

function eliminarUsuario($id) {
    global $conexion;
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (eliminarUsuario($id)) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario.";
    }
}
?>