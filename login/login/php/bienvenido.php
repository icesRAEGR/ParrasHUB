<?php
require('conexion_be.php');
session_start();

// Verifica si no hay sesión activa para 'usuario'
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión activa, muestra un mensaje y redirige con JavaScript
    echo '<script>
            alert("Por favor, debes iniciar sesión.");
            window.location = "login.php";
          </script>';
    exit();  // Siempre es buena práctica usar exit() después de redirigir
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido</title>
    <link rel="stylesheet" href="/ParrasHUB/css/esqueleto.css"/>
    <link rel="stylesheet" href="/ParrasHUB/normalize.css">
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
                    <h1 class="logo"><a href="/Index.html">Bienvenido</a></h1>
                </div>

                <div class="container-user">
                    <!-- Mostrar nombre del usuario o mensaje -->
                    <p>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</p>
                    <!-- Botón para cerrar sesión -->
                    <form action="cerrar_sesion.php" method="post">
                        <button type="submit">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="/Index.html">Home</a></li>
                    <li><a href="/hoteles/hoteles.html">Hoteles</a></li>
                    <li><a href="lugaresturisiticos.html">Lugares turísticos</a></li>
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
        <section class="container top-categories">
            <h1 class="heading-1">Tus Productos</h1>
        </section>
		<form action="php/cerrar_sesion.php" method="post">
			<button type="submit">Cerrar sesión</button>
		</form>

        <div class="contenedor">
            <!-- Aquí puedes cargar productos o datos específicos del usuario -->
        </div>
    </main>

    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>
                            Dirección: 71 Pennington Lane Vernon Rockville, CT 06066
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
                            Suscríbete a nuestros boletines ahora y mantente al día con nuevas colecciones y ofertas exclusivas.
                        </p>
                        <input type="email" placeholder="Ingresa el correo aquí...">
                        <button>Suscríbete</button>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>Desarrollado por Programación para el mundo &copy; 2022</p>
                <img src="img/payment.png" alt="Pagos">
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>