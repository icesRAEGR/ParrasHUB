<?php
    include 'conexion_be.php'; // Asegúrate de que 'conexion_be.php' contenga la conexión correcta

    // Obtener los datos enviados a través del formulario
    $nombre_completo = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $contrasena = trim($_POST["contrasena"]); // Limpiar la contraseña de posibles espacios adicionales

    // Verificar que no se repita el correo en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM registro WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '<script>
                alert("Este correo ya está registrado");
                window.location = "../login.php";
              </script>';
        exit();
    }

    // Verificar que no se repita el usuario en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '<script>
                alert("Este usuario ya está registrado");
                window.location = "../login.php";
              </script>';
        exit();
    }

    // Insertar los datos del usuario en la base de datos (sin incluir el ID)
    $query = "INSERT INTO registro (nombre_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $nombre_completo, $correo, $usuario, $contrasena);  // "ssss" indica que todos los parámetros son cadenas
        $ejecutar = mysqli_stmt_execute($stmt);

        if($ejecutar) {
            echo '<script>
                    alert("Usuario registrado exitosamente");
                    window.location = "../index.html";
                  </script>';
        } else {
            echo '<script>
                    alert("Fallo el registro, inténtelo de nuevo");
                    window.location = "../index.html";
                  </script>';
        }

        mysqli_stmt_close($stmt);  // Cerrar la sentencia preparada
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>