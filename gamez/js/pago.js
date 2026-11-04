document.addEventListener("DOMContentLoaded", function () {
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    let total = 0;
    let tbody = document.getElementById("carrito-body");
    let totalElement = document.getElementById("total");
    let paypalButtonContainer = document.getElementById("paypal-button-container");

    // Función para calcular el total del carrito
    function calcularTotal() {
        total = 0; // Reiniciar el total
        carrito.forEach(item => {
            total += item.precio * item.cantidad;
        });
        totalElement.textContent = `$${total.toFixed(2)}`; // Mostrar el total actualizado
    }

    // Función para renderizar el carrito
    function renderizarCarrito() {
        tbody.innerHTML = ""; // Limpiar el contenido actual del carrito

        if (carrito.length === 0) {
            let row = document.createElement("tr");
            row.innerHTML = `<td colspan="5">No hay productos en el carrito</td>`;
            tbody.appendChild(row);
            paypalButtonContainer.style.display = "none"; // Ocultar PayPal si no hay productos
        } else {
            carrito.forEach((item, index) => {
                let row = document.createElement("tr");
                row.innerHTML = `
                    <td>${item.titulo}</td>
                    <td>$${item.precio}</td>
                    <td>
                        <input type="number" min="1" value="${item.cantidad}" 
                               onchange="actualizarCantidad(${index}, this.value)">
                    </td>
                    <td>$${(item.precio * item.cantidad).toFixed(2)}</td>
                    <td>
                        <button onclick="eliminarProducto(${index})">Eliminar</button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            paypalButtonContainer.style.display = "block"; // Mostrar PayPal si hay productos
        }

        // Calcular y mostrar el total
        calcularTotal();
    }

    // Función para actualizar la cantidad de un producto
    window.actualizarCantidad = function (index, cantidad) {
        if (cantidad < 1) cantidad = 1; // Validar que la cantidad no sea menor que 1
        carrito[index].cantidad = parseInt(cantidad);
        localStorage.setItem("carrito", JSON.stringify(carrito));
        renderizarCarrito(); // Volver a renderizar el carrito
    };

    // Función para eliminar un producto del carrito
    window.eliminarProducto = function (index) {
        carrito.splice(index, 1); // Eliminar el producto del carrito
        localStorage.setItem("carrito", JSON.stringify(carrito));
        renderizarCarrito(); // Volver a renderizar el carrito
    };

    // Renderizar el carrito al cargar la página
    renderizarCarrito();

    // Configuración de PayPal
    if (carrito.length > 0) {
        paypal.Buttons({
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: total.toFixed(2)
                        }
                    }]
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    alert('Pago completado por ' + details.payer.name.given_name);
                    localStorage.removeItem("carrito"); // Limpiar carrito después del pago
                    window.location.reload(); // Recargar la página
                });
            },
            onError: function (err) {
                console.error("Error en el pago de PayPal:", err);
                alert("Hubo un error al procesar el pago. Por favor, intenta nuevamente.");
            }
        }).render('#paypal-button-container');
    }
});