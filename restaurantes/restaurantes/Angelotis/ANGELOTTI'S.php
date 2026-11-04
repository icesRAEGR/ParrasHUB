<?php 
// Iniciar sesión al principio del archivo
session_start();

// Verificar si hay una sesión activa
$usuarioActivo = isset($_SESSION['usuario']);
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
		<title>Angelottis</title>
		<link rel="stylesheet" href="angelottis.css" />
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
						<h1 class="logo"><a href="/ParrasHUB/Index.php">Angelottis</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="/ParrasHUB/index.php">Inicio</a></li>
						<li><a href="/ParrasHUB/hoteles/hoteles.html">Hoteles</a></li>
						<li><a href="/ParrasHUB/lugares turisticos/lugaresturisticos.html">lugares-turisticos</a></li>
						<li><a href="/ParrasHUB/restaurantes/restauranteborrador.html">Restaurantes</a></li>
						<li><a href="/ParrasHUB/tiendas/tiendas.html">Tiendas</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="baner">
			<div class="content-banner">
				<p>Restaurante argentino</p>
				<h2>100% Natural <br />Buena Comida</h2>
			</div>
		</section>

		<main class="main-content">
			<section class="container top-products">
				<h1 class="heading-1">Mejores Productos</h1>
				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<a href="/ParrasHUB/restaurantes/restaurantes/Angelotis/productos/carnitaasada.php"><img src="/ParrasHUB/imagen/angelottis2.jpg" alt="Cafe Irish" /></a>
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Carnita Asada</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<a href="/ParrasHUB/restaurantes/restaurantes/Angelotis/productos/chilerellleno.html"><img
								src="/ParrasHUB/imagen/angelottis3.jpg"
								alt="Cafe incafe-ingles.jpg"
							/></a>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Chile Relleno</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<a href="/ParrasHUB/restaurantes/restaurantes/Angelotis/productos/nieve.html"><img
								src="/ParrasHUB/imagen/angelottis1.jpg"
								alt="Cafe Australiano"
							/></a>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Nieve</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.20</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<a href="/ParrasHUB/restaurantes/restaurantes/Angelotis/productos/pizza.html">
								<img src="/ParrasHUB/imagen/angelottis4.jpg" alt="Cafe Helado" /></a>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Pizza</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

			<?php if($usuarioActivo): ?>
<!-- Solo mostrará estas secciones si hay sesión activa -->
<section class="banner">
    <h2>RESERVA TU MESA</h2>
    <div class="card-contenedor">
        <div class="card-img"></div>
        <div class="card-contenido">
            <h3>Reserva</h3>
            <form id="reservar-mesa" action="reservar.php" method="post">
                <div class="form-row">
                    <input type="date" id="fecha_reserva" name="fecha" required>
                    <input type="time" id="hora_reserva" name="hora" min="10:00" max="24:00" required>
                </div>

                <div class="form-row">
                    <input type="text" placeholder="nombre_cliente" id="nombre" name="nombre" required>
                    <input type="text" placeholder="telefono_cliente" id="telefono" name="telefono" required>
                </div>

                <div class="form-row">
                    <input type="number" placeholder="num_personas" id="personas" name="personas" min="1" required>
                    <input type="submit" value="RESERVAR MESA">
                </div>
            </form>

            <script>
                const form = document.getElementById("reservar-mesa");
                form.addEventListener("submit", function (event) {
                    const submitButton = form.querySelector("[type='submit']");
                    submitButton.disabled = true;
                    submitButton.value = "Procesando...";
                });
            </script>
        </div>
    </div>
</section>

<section id="administraReservas">
    <h2 id="administra">Administrar reservas</h2>
    <ul id="reservas" class="lista-citas"></ul>
</section>

<script src="app.js" type="module"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('reservar-mesa').addEventListener('submit', async function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            try {
                const response = await fetch('reservar.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const message = await response.text();
                    console.log(message);
                    alert(message);

                    if (!message.includes("no disponibles")) {
                        const reservas = await fetchReservas();
                        actualizarReservas(reservas);
                    }
                }
            } catch (error) {
                console.error('Error:', error);
            }
        });

        async function fetchReservas() {
            const response = await fetch('reservas.php');
            const reservas = await response.json();
            return reservas;
        }

        function actualizarReservas(reservas) {
            const listaReservas = document.getElementById('administraReservas');
            listaReservas.innerHTML = '';

            reservas.forEach(reserva => {
                const li = document.createElement('li');
                li.textContent = `${reserva.nombre} - ${reserva.fecha} a las ${reserva.hora} para ${reserva.personas} personas`;
                listaReservas.appendChild(li);
            });
        }
    });
</script>
<?php endif; ?>


		<main class="contenido-principal">
			<!-- Contenedor principal que tendrá el mapa y la caja de comentarios -->
			<div class="mapa-y-comentarios">
				<!-- Mapa -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.979232832366!2d-102.18788412483134!3d25.438957821866364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868f494a9a91442f%3A0xd7ebe58f8e9c04f3!2sAngelotti&#39;s!5e0!3m2!1ses!2smx!4v1727236765395!5m2!1ses!2smx"
					width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
				<!-- Caja de comentarios -->
				<form id="formulario-comentario" action="/ParrasHUB/restaurantes/restaurantes/Angelotis/guardar_comentario.php" method="post">

					<h2>Deja tu comentario</h2>
					<form id="formulario-comentario">
						<div class="fila-formulario">
							<label for="nombre">Nombre:</label>
							<input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
						</div>
		
						<div class="fila-formulario">
							<label for="correo">Correo Electrónico:</label>
							<input type="email" id="correo" name="correo" placeholder="Tu correo electrónico" required>
						</div>
		
						<div class="fila-formulario">
							<label for="comentario">Comentario:</label>
							<textarea id="comentario" name="comentario" placeholder="Escribe tu comentario aquí" rows="4" required></textarea>
						</div>
		
						<div class="fila-formulario">
							<input type="submit" value="Enviar Comentario">
						</div>
					</form>
		
					<div id="lista-comentarios">
						<h3>Comentarios:</h3>
						<ul class="items-comentarios">
							<!-- Los comentarios aparecerán aquí -->
						</ul>
					</div>
					<div id="rating">
						<h3>Calificación del Hotel</h3>
						<span class="star" data-value="1">&#9733;</span>
						<span class="star" data-value="2">&#9733;</span>
						<span class="star" data-value="3">&#9733;</span>
						<span class="star" data-value="4">&#9733;</span>
						<span class="star" data-value="5">&#9733;</span>
						<input type="hidden" id="rating-value" name="rating" value="0">
					</div>
				</form>
			</section>
		</div>
		</main>
		
		

		<script src="/js/comments.js" type="module"></script>


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
							<li>EmaiL: angelottis@support.com</li>
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
								Sigue al tanto de  nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
						</div>
					</div>
				</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>

		<script type="module">
    document.getElementById('reservar-mesa').addEventListener('submit', async function(event) {
        event.preventDefault(); // Evita la recarga de la página

        // Obtiene los datos del formulario
        const formData = new FormData(this);

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
    });

    // Función para obtener las reservas desde un archivo PHP
    async function fetchReservas() {
        const response = await fetch('obtener_reservas.php'); // Supón que `obtener_reservas.php` devuelve las reservas en JSON
        return response.json();
    }

    // Función para actualizar la lista de reservas
    function actualizarReservas(reservas) {
        const lista = document.getElementById('reservas');
        lista.innerHTML = ''; // Limpia la lista actual

        reservas.forEach(reserva => {
            const item = document.createElement('li');
            item.textContent = `${reserva.nombre} - ${reserva.fecha} a las ${reserva.hora}`;
            lista.appendChild(item);
        });
    }
</script>

		
	</body>
</html>