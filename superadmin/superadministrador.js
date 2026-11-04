document.addEventListener('DOMContentLoaded', () => {
    const btnDashboard = document.getElementById('btn-dashboard');
    const btnArrendadores = document.getElementById('btn-arrendadores');
    const btnClientes = document.getElementById('btn-clientes');
    
    const seccionResumen = document.getElementById('seccion-resumen');
    const seccionGrafica = document.getElementById('seccion-grafica');
    const seccionArrendadores = document.getElementById('seccion-arrendadores');
    const seccionClientes = document.getElementById('seccion-clientes');
    const otrasOpciones = document.querySelectorAll('.opcion-menu');

    // Función auxiliar para ocultar todos los paneles principales
    function ocultarTodo() {
        if (seccionResumen) seccionResumen.classList.add('oculto');
        if (seccionGrafica) seccionGrafica.classList.add('oculto');
        if (seccionArrendadores) seccionArrendadores.classList.add('oculto');
        if (seccionClientes) seccionClientes.classList.add('oculto');
    }

    // Al hacer clic en Dashboard
    if (btnDashboard) {
        btnDashboard.addEventListener('click', () => {
            ocultarTodo();
            if (seccionResumen) seccionResumen.classList.remove('oculto');
            if (seccionGrafica) seccionGrafica.classList.remove('oculto');
        });
    }

    // Al hacer clic en Arrendadores
    if (btnArrendadores) {
        btnArrendadores.addEventListener('click', () => {
            ocultarTodo();
            if (seccionArrendadores) seccionArrendadores.classList.remove('oculto');
        });
    }

    // Al hacer clic en Clientes
    if (btnClientes) {
        btnClientes.addEventListener('click', () => {
            ocultarTodo();
            if (seccionClientes) seccionClientes.classList.remove('oculto');
        });
    }

    // Para el resto de opciones del menú que aún no tienen vista propia
    otrasOpciones.forEach(opcion => {
        if (opcion !== btnArrendadores && opcion !== btnClientes) {
            opcion.addEventListener('click', () => {
                ocultarTodo();
            });
        }
    });
})