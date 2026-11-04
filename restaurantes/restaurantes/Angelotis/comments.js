document.addEventListener("DOMContentLoaded", async () => {
    const listaComentarios = document.querySelector("#lista-comentarios .items-comentarios");

    async function fetchComentarios() {
        const response = await fetch("obtener_comentarios.php");
        const comentarios = await response.json();
        listaComentarios.innerHTML = "";

        comentarios.forEach(c => {
            const li = document.createElement("li");
            li.textContent = `${c.nombre} (${c.fecha}): ${c.comentario}`;
            listaComentarios.appendChild(li);
        });
    }

    document.getElementById("formulario-comentario").addEventListener("submit", async function (event) {
        event.preventDefault();
        const formData = new FormData(this);

        const response = await fetch(this.action, {
            method: "POST",
            body: formData
        });

        if (response.ok) {
            alert("Comentario guardado.");
            fetchComentarios(); // Actualizar lista de comentarios
        } else {
            alert("Error al guardar el comentario.");
        }
    });

    fetchComentarios(); // Cargar comentarios al inicio
});
