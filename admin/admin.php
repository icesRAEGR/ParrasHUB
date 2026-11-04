<?php
include('conexion.php');
include('buscar.php'); // Incluimos el archivo de búsqueda
session_start(); // Añadido para manejar sesiones
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Administrador</title>
		<link rel="stylesheet" href="/ParrasHUB/admin/esqueleto.css" />
        <link rel="stylesheet" href="/ParrasHUB/normalize.css">
        <link rel="stylesheet" href="/ParrasHUB/admin/registros.css">
		<link rel="stylesheet" href="/ParrasHUB/admin/logout.css">
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
						<h1 class="logo"><a href="/ParrasHUB/Index.php">Administrador</a></h1>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="/ParrasHUB/Index.php">Home</a></li>
						<li><a href="/ParrasHUB/hoteles/hoteles.html">Hoteles</a></li>
						<li><a href="/ParrasHUB/lugares turisticos/lugaresturisticos.html">lugares-turisticos</a></li>
						<li><a href="/ParrasHUB/tiendas/tiendas.html">Tiendas</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Hoteles</span>
						<form action="phpregistro/reservas_hoteles.php" method="post">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required><br><br>
                    
                            <label for="servicio">Servicio:</label>
                            <input type="text" id="servicio" name="servicio" required><br><br>
                    
                            <label for="precio">Precio:</label>
                            <input type="number" id="precio" name="precio" step="0.01" required><br><br>
                    
                            <label for="habitacion">Tipo de habitación:</label>
                            <select id="habitacion" name="habitacion" required>
                                <option value="sencilla">Sencilla</option>
                                <option value="doble">Doble</option>
                                <option value="suite">Suite</option>
                            </select><br><br>
                    
                            <button type="submit">Enviar</button>
                        </form>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Restaurantes</span>
						<form action="/enviar" method="post">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required><br><br>
                    
                            <label for="platillo">Platillo:</label>
                            <input type="text" id="platillo" name="platillo" required><br><br>
                    
                            <label for="costo">Costo:</label>
                            <input type="number" id="costo" name="costo" step="0.01" required><br><br>
                    
                            <label for="mesa">Reserva de mesa:</label>
                            <select id="mesa" name="mesa" required>
                                <option value="ventana">Mesa junto a la ventana</option>
                                <option value="central">Mesa central</option>
                                <option value="privada">Mesa privada</option>
                            </select><br><br>
                    
                            <button type="submit">Enviar</button>
                        </form>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>lugares-turisticos</span>
                        <form action="/enviar" method="post">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required><br><br>
                    
                            <label for="direccion">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" required><br><br>
                    
                            <label for="horario">Horario:</label>
                            <input type="time" id="horario" name="horario" required><br><br>
                    
                            <label for="precio">Precio:</label>
                            <input type="number" id="precio" name="precio" step="0.01" required><br><br>
                    
                            <button type="submit">Enviar</button>
                        </form>
					</div>
				</div>
			</section>
            <section class="container container-features">
                <div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Tiendas</span>
						<form action="/enviar" method="post">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required><br><br>
                    
                            <label for="producto">Producto:</label>
                            <input type="text" id="producto" name="producto" required><br><br>
                    
                            <label for="piezas">Piezas:</label>
                            <input type="number" id="piezas" name="piezas" required><br><br>
                    
                            <label for="costo">Costo:</label>
                            <input type="number" id="costo" name="costo" step="0.01" required><br><br>
                    
                            <button type="submit">Enviar</button>
                        </form>
					</div>
				</div>
                
                <!-- Botón para cerrar sesión -->
                <div class="card-feature">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <div class="feature-content">
                        <span>Cerrar Sesión</span>
                        <form action="logout.php" method="post">
                            <p>¿Deseas salir del sistema?</p>
                            <button type="submit" class="logout-btn">Cerrar Sesión</button>
                        </form>
                    </div>
                </div>
                
				<section class="container blogs">
					<h1 class="heading-1">CRUD</h1>
			
					<!-- Formulario de búsqueda -->
					<form method="POST" action="">
						<label for="nombre">Buscar por nombre:</label>
						<input type="text" name="nombre" id="nombre" required>
						<input type="submit" name="buscar" value="Buscar">
					</form>
			
					<?php
					// Procesamos la búsqueda
					if (isset($_POST['buscar'])) {
						$nombre = $_POST['nombre'];
						$resultado = buscarUsuarios($nombre);
			
						if ($resultado->num_rows > 0) {
							echo "<h2>Resultados de búsqueda:</h2><ul>";
							while ($row = $resultado->fetch_assoc()) {
								echo "<li>" . $row['nombre'] . " - 
									<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | 
									<a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a>
									</li>";
							}
							echo "</ul>";
						} else {
							echo "No se encontraron resultados.";
						}
					}
					?>
				</section>
			</section>
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