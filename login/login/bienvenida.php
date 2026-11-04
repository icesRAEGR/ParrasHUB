<?php
require 'conexion.php'; // Incluye la conexión a la base de datos

// Consulta para obtener las reservas
$sql = "SELECT fecha, hora, nombre, telefono, personas FROM restauranteangelottis ORDER BY fecha, hora";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Bienvenido</title>
		<link rel="stylesheet" href="/ParrasHUB/css/esqueleto.css" />
		<link rel="stylesheet" href="/normalize.css">
		<link rel="stylesheet" href="bienvenida.css">
		<link rel="stylesheet" href="/gamez/css/pago.css"> <!-- Asegúrate de que la ruta sea correcta -->
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		<script src="https://www.paypal.com/sdk/js?client-id=TU_CLIENT_ID&currency=USD"></script>
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">123-456-7890</span>
						</div>
					</div>

					<div class="container-logo">
						<h1 class="logo"><a href="/ParrasHUB/Index.php">Bienvenido</a></h1>
					</div>

					<div class="container-user">
						
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="/ParrasHUB/Index.php">Inicio</a></li>
						<li><a href="/hoteles/hoteles.html">Hoteles</a></li>
						<li><a href="lugaresturisiticos.html">Lugares-turisticos</a></li>
						<li><a href="/restaurantes/restauranteborrador.html">Restaurantes</a></li>
                        <li><a href="/tiendas/tiendas.html">Tiendas</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>

		<main class="main-content">
			<section class="datos">
				<h1 class="datos"></h1>
			</section>
			<section class="container top-categories">
				<h1 class="heading-1">Tus Productos</h1>
			</section>
			<section class="productosdb">
				<div class="productos">
					<?php
					// Verificar si hay resultados
					if ($result->num_rows > 0) {
						// Mostrar cada reserva en un bloque HTML
						while ($row = $result->fetch_assoc()) {
							echo "<div class='reserva'>";
							echo "<p><strong>Fecha:</strong> " . htmlspecialchars($row['fecha']) . "</p>";
							echo "<p><strong>Hora:</strong> " . htmlspecialchars($row['hora']) . "</p>";
							echo "<p><strong>Nombre:</strong> " . htmlspecialchars($row['nombre']) . "</p>";
							echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($row['telefono']) . "</p>";
							echo "<p><strong>Número de personas:</strong> " . htmlspecialchars($row['personas']) . "</p>";
							echo "</div>";
						}
					} else {
						echo "<p>No hay reservas disponibles.</p>";
					}
		
					// Cerrar la conexión
					$conn->close();
					?>
				</div>
			</section>
			<section class="reservasdb">
    <h2 class="heading-2">Reservas de Hotel</h2>
    <div class="reservas">
        <?php
        // Verificar si hay resultados
        if ($result_reservas->num_rows > 0) {
            // Mostrar cada reserva en un bloque HTML
            while ($reserva = $result_reservas->fetch_assoc()) {
                echo "<div class='reserva'>";
                echo "<p><strong>Destino:</strong> " . htmlspecialchars($reserva['destino']) . "</p>";
                echo "<p><strong>Check-in:</strong> " . htmlspecialchars($reserva['fecha_checkin']) . "</p>";
                echo "<p><strong>Check-out:</strong> " . htmlspecialchars($reserva['fecha_checkout']) . "</p>";
                echo "<p><strong>Tipo de habitación:</strong> " . htmlspecialchars($reserva['tipo_habitacion']) . "</p>";
                echo "<p><strong>Adultos:</strong> " . htmlspecialchars($reserva['num_adultos']) . "</p>";
                echo "<p><strong>Niños:</strong> " . htmlspecialchars($reserva['num_ninos']) . "</p>";
                echo "<p><strong>Bebés:</strong> " . htmlspecialchars($reserva['num_bebes']) . "</p>";
                echo "<p><strong>Servicios:</strong> " . htmlspecialchars($reserva['servicios']) . "</p>";
                echo "<p><strong>Comentarios:</strong> " . htmlspecialchars($reserva['comentarios']) . "</p>";
                echo "<p><strong>Nombre:</strong> " . htmlspecialchars($reserva['nombre_completo']) . "</p>";
                echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($reserva['telefono']) . "</p>";
                echo "<p><strong>Correo:</strong> " . htmlspecialchars($reserva['correo']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay reservas disponibles.</p>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
		</div>
	</section>
	<!-- Contenedor principal -->
	<section class="carrito">
            <h2>Carrito de Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="carrito-body"></tbody>
            </table>
            <h2>Total: $<span id="total">0.00</span></h2>
            
            <!-- Botón de Método de Pago -->
            <button class="boton" onclick="mostrarMetodosDePago()">Método de Pago</button>
            
            <!-- Contenedor de métodos de pago -->
            <div id="metodos-pago">
                <h3>Elige un método de pago:</h3>
                <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" 
                     alt="PayPal" 
                     onclick="seleccionarMetodo('paypal')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/1200px-MasterCard_Logo.svg.png" 
                     alt="Tarjeta de Crédito" 
                     onclick="seleccionarMetodo('tarjeta')">
            </div>

            <!-- Botón de Confirmar Compra -->
            <div id="confirmar-compra">
                <button class="boton" onclick="confirmarCompra()">Confirmar Compra</button>
            </div>
        </section>
	</section>
			<button class="salir">salir</button>
		</main>

		<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: 71 Pennington Lane Vernon Rockville, CT
								06066
							</li>
							<li>Teléfono: 123-456-7890</li>
							<li>Fax: 55555300</li>
							<li>EmaiL: baristas@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">Información Delivery</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Términos y condiciones</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Historial de ordenes</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por Programación para el mundo &copy; 2022
					</p>

					<img src="img/payment.png" alt="Pagos">
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
