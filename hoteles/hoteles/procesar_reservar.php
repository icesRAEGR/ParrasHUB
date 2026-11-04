<?php
require 'db.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos del formulario
    $destino = $_POST['destino'] ?? '';
    $fecha_checkin = $_POST['fecha_checkin'] ?? '';
    $fecha_checkout = $_POST['fecha_checkout'] ?? '';
    $tipo_habitacion = $_POST['tipo_habitacion'] ?? '';
    $num_adultos = $_POST['num_adultos'] ?? 0;
    $num_ninos = $_POST['num_ninos'] ?? 0;
    $num_bebes = $_POST['num_bebes'] ?? 0;
    $servicios = isset($_POST['servicios']) ? implode(', ', $_POST['servicios']) : '';
    $comentarios = $_POST['comentarios'] ?? '';
    $nombre_completo = $_POST['nombre_completo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';

    // Validación básica
    $errores = [];
    if (empty($destino)) $errores[] = "El destino es obligatorio.";
    if (empty($fecha_checkin)) $errores[] = "La fecha de check-in es obligatoria.";
    if (empty($fecha_checkout)) $errores[] = "La fecha de check-out es obligatoria.";
    if (empty($nombre_completo)) $errores[] = "El nombre completo es obligatorio.";
    if (empty($telefono)) $errores[] = "El número de teléfono es obligatorio.";
    if (empty($correo)) $errores[] = "El correo electrónico es obligatorio.";

    if (!empty($errores)) {
        echo "<h3>Errores encontrados:</h3><ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    } else {
        try {
            // Insertar datos en la base de datos
            $sql = "INSERT INTO reservas 
                    (destino, fecha_checkin, fecha_checkout, tipo_habitacion, num_adultos, num_ninos, num_bebes, servicios, comentarios, nombre_completo, telefono, correo) 
                    VALUES 
                    (:destino, :fecha_checkin, :fecha_checkout, :tipo_habitacion, :num_adultos, :num_ninos, :num_bebes, :servicios, :comentarios, :nombre_completo, :telefono, :correo)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':destino' => $destino,
                ':fecha_checkin' => $fecha_checkin,
                ':fecha_checkout' => $fecha_checkout,
                ':tipo_habitacion' => $tipo_habitacion,
                ':num_adultos' => $num_adultos,
                ':num_ninos' => $num_ninos,
                ':num_bebes' => $num_bebes,
                ':servicios' => $servicios,
                ':comentarios' => $comentarios,
                ':nombre_completo' => $nombre_completo,
                ':telefono' => $telefono,
                ':correo' => $correo,
            ]);
            echo "<h3>¡Reserva guardada exitosamente!</h3>";
        } catch (PDOException $e) {
            echo "Error al guardar la reserva: " . $e->getMessage();
        }
    }
}
?>