<?php
session_start();
$mostrarAdmin = isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 'admin'; // Asume que guardas el rol en la sesión
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
		<title>ParrasHub</title>
		<link rel="stylesheet" href="css/esqueleto.css" />
		<link rel="stylesheet" href="carrusel.css">
		<link rel="stylesheet" href="normalize.css">
	</head>
	<body>
		<header>
			<nav>
				<a href="login/login/login.php" class="active">Iniciar Sesión</a>
				<a href="https://www.google.com/maps/d/viewer?hl=es-419&mid=1GfnUhKIpQRtXBFCah9zFLpQUrhZFgT8&ll=25.44718650942381%2C-102.18834935&z=13">Rutas de Parras</a>
				<a href="hoteles/hoteles.html">Hoteles</a>
				<a href="lugares turisticos/lugaresturisticos.html">Lugares Turisticos</a>
				<a href="restaurantes/restauranteborrador.html">Restaurantes</a>
				<a href="tiendas/tiendas.html">Tiendas</a>
				<?php if($mostrarAdmin): ?>
					<a href="/ParrasHUB/admin/admin.php">admin</a>
				<?php endif; ?>
			</nav>
			<nav>
				<form class="search-form">
					<input type="search" placeholder="Buscar..." />
					<button class="btn-search">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>
			</nav>
		</header>
		<div class="slider">
			<div class="list">
				<div class="item">
					<img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2010/06/Nuevo-proyecto-47.png" alt="">
					<div class="content">
						<div class="title">Santo Madero</div>
						<div class="type">FLOWER</div>
						<div class="description">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
						</div>
						<div class="button">
							<a href="/lugares turisticos/lugarers turisticos/santomadero.html"><button>MORE</button></a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="https://www.gob.mx/cms/uploads/image/file/508099/BODEGA_COAH_PARRAS_CASA-MADERO_AM_web.jpg" alt="">
					<div class="content">
						<div class="title">Casa del Vino</div>
						<div class="type">NATURE</div>
						<div class="description">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
						</div>
						<div class="button">
							<a href="/lugares turisticos/lugarers turisticos/BodegaRGMX.html"><button>MORE</button></a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="https://parvadacv.mx/wp-content/uploads/2022/05/sp-parvada-desarrollo-inmobiliarios-parras-fuente-coahuila-3.jpg" alt="">
					<div class="content">
						<div class="title">Grandes Eventos</div>
						<div class="type">PLANT</div>
						<div class="description">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
						</div>
						<div class="button">
							<a href="/lugares turisticos/lugarers turisticos/LasPudencianas.html"><button>MORE</button></a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="https://rgmx.mx/cdn/shop/files/RG-N-Hero-min.jpg?v=1620432802&width=3840" alt="">
					<div class="content">
						<div class="title">Belleza Impresionante</div>
						<div class="type">NATURE</div>
						<div class="description">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
						</div>
						<div class="button">
							<a href="/lugares turisticos/lugarers turisticos/CasaMadero.html"><button>MORE</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="thumbnail">
				<div class="item">
					<img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2010/06/Nuevo-proyecto-47.png" alt="">
				</div>
				<div class="item">
					<img src="https://www.gob.mx/cms/uploads/image/file/508099/BODEGA_COAH_PARRAS_CASA-MADERO_AM_web.jpg" alt="">
				</div>
				<div class="item">
					<img src="https://parvadacv.mx/wp-content/uploads/2022/05/sp-parvada-desarrollo-inmobiliarios-parras-fuente-coahuila-3.jpg" alt="">
				</div>
				<div class="item">
					<img src="https://rgmx.mx/cdn/shop/files/RG-N-Hero-min.jpg?v=1620432802&width=3840" alt="">
				</div>
			</div>
			<div class="nextPrevArrows">
				<button class="prev"> < </button>
				<button class="next"> > </button>
			</div>
		</div>
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
		<script src="carrusel.js"></script>
	</body>
</html>
