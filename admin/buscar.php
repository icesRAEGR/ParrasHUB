<?php
include('conexion.php');

function buscarUsuarios($nombre) {
    global $conexion;
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
    return $conexion->query($sql);
}
?>