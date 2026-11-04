<?php
    session_start();  // Inicia la sesión

    // Limpiar todas las variables de sesión
    $_SESSION = array();

    // Si deseas destruir la cookie de la sesión también, puedes hacer esto:
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, 
            $params["path"], $params["domain"], 
            $params["secure"], $params["httponly"]
        );
    }

    // Finalmente destruir la sesión
    session_destroy();  

    // Redirigir a la página de login
    header("Location: ../login.php");
    exit();  // Es importante llamar a exit() para asegurarse de que no se ejecute más código
?>