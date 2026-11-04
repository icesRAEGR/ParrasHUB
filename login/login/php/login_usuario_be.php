<?php 
session_start();
include 'conexion_be.php'; // Conexión a la base de datos

// Obtener datos del formulario
$correo = strtolower(trim($_POST['correo']));
$contrasena = trim($_POST['contrasena']);

// Consultar si existe el usuario
$validar_login = mysqli_query($conexion, "SELECT * FROM registro WHERE correo='$correo'");

if (!$validar_login) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($validar_login) > 0) {
    // Obtener los datos del usuario
    $usuario = mysqli_fetch_assoc($validar_login);

    // Verificar la contraseña sin encriptación
    if ($contrasena === trim($usuario['contrasena'])) {  
        // Iniciar sesión y guardar datos
        $_SESSION['usuario'] = $correo;
        $_SESSION['rol'] = $usuario['rol']; // Guardamos el rol del usuario

        header("Location: bienvenido.php");
        exit();
    } else {
        echo '<script>
                alert("La contraseña es incorrecta, intente nuevamente.");
                window.location = "../login.php";
              </script>';
        exit();
    }
} else {
    echo '<script>
            alert("El correo no está registrado.");
            window.location = "../login.php";
          </script>';
    exit();
}
?>