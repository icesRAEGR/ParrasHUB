<?php
$servername = "localhost";
$username = "root"; // Cambia esto por tu nombre de usuario
$password = ""; // Cambia esto por tu contraseña
$dbname = "parras"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// El código PHP ya está insertando los datos correctamente. Vamos a asegurarnos de que siempre retorne una respuesta clara al cliente.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos enviados desde el formulario
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $personas = $_POST['personas'];

    // Validar que todos los datos necesarios estén presentes
    if (empty($fecha) || empty($hora) || empty($nombre) || empty($telefono) || empty($personas)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Validar que el número de personas sea un valor numérico válido
    if (!is_numeric($personas) || $personas <= 0) {
        echo "El número de personas no es válido.";
        exit;
    }

    // Consulta para verificar si ya existe una reserva con la misma fecha y hora
    $sql_check = "SELECT * FROM restauranteangelottis WHERE fecha = ? AND hora = ?";
    $stmt = $conn->prepare($sql_check);
    $stmt->bind_param("ss", $fecha, $hora);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si ya existe una reserva duplicada
    if ($result->num_rows > 0) {
        echo "Fecha y hora ya no disponibles.";
    } else {
        // Consulta para insertar los datos si no hay duplicados
        $sql = "INSERT INTO restauranteangelottis (fecha, hora, nombre, telefono, personas) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql);
        $stmt_insert->bind_param("ssssi", $fecha, $hora, $nombre, $telefono, $personas);

        // Ejecutar la consulta
        if ($stmt_insert->execute()) {
            echo "Reserva realizada con éxito.";
        } else {
            echo "Error al realizar la reserva: " . $stmt_insert->error;
        }
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
