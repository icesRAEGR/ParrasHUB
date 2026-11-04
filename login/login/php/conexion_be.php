<?php 
    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "parras");

    // Verificar la conexión
    if($conexion){
        echo "Conexión exitosa a la base de datos.";
    } else {
        echo "Error de conexión: " . mysqli_connect_error();
    }
?>