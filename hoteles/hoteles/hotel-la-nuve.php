<?php
// Llamando a los campos para comentarios
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "ventas");

// Escapando caracteres especiales
$nombre = mysqli_real_escape_string($conexion, $nombre);
$comentario = mysqli_real_escape_string($conexion, $comentario);

// Insertando comentario en la base de datos
$resultado = mysqli_query($conexion, 'INSERT INTO comentarios (nombre, comentario) VALUES ("'.$nombre.'", "'.$comentario.'")');

// Redirigiendo a la página principal después de insertar
header('Location: ../index.php');
exit;

// Llamando a los campos para el formulario de contacto
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "mugarte5672@gmail.com";
$asunto = "Contacto desde nuestra web";

// Componiendo el mensaje
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando el mensaje
mail($destinatario, $asunto, $carta);

// Redirigiendo a la página de inicio después de enviar el mensaje
header('Location: ../index.html');
exit;
?>
