document.getElementById('reservar-mesa').addEventListener('submit', async function(event) {
    event.preventDefault(); // Evita la recarga de la página

    // Obtiene los datos del formulario
    const formData = new FormData(this);

    try {
        // Envía la solicitud a `reservar.php`
        const response = await fetch('reservar.php', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            // Si la solicitud es exitosa, obtén las reservas y actualiza la lista
            const reservas = await fetchReservas(); // Función para obtener las reservas
            actualizarReservas(reservas); // Actualiza la lista en `#administraReservas`
        } else {
            alert("Error al realizar la reserva. Intenta de nuevo.");
        }
    } catch (error) {
        alert("Hubo un error al procesar tu solicitud. Intenta de nuevo.");
        console.error(error);
    }
});
