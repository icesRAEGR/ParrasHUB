<script>
document.querySelector("form").addEventListener("submit", function(event) {
    if (event.submitter.value === "buscar") {
        event.preventDefault(); // Evitar que el formulario se envíe
        let codigo = document.getElementById("codigo").value;

        fetch("/gamez/php/procesar_formulario.php", {
            method: "POST",
            body: new URLSearchParams({ codigo: codigo, accion: "buscar" }),
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
        })
        .then(response => response.json())
        .then(data => {
            if (data) {
                document.getElementById("producto_id").value = data.id;
                document.getElementById("nombre").value = data.nombre;
                document.getElementById("cantidad").value = data.cantidad;
                document.getElementById("precio").value = data.precio;
                document.getElementById("codigo").value = data.codigo;
            } else {
                alert("Producto no encontrado");
            }
        })
        .catch(error => console.error("Error:", error));
    }
});
</script>