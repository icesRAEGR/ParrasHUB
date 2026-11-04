<?php
// Iniciar sesión al principio del documento
session_start();

// Verificar si el usuario está logueado
$usuario_logueado = isset($_SESSION['usuario_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Los Balcones</title>
    <link rel="stylesheet" href="hotel-la-nuve.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="hotel-la-nuve.php">
    
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
                    <span class="number">987-654-3210</span> <!-- Nuevo número agregado -->
                </div>
            </div>
            <div class="container-titulo">
                <h1 class="titulo"><a href="/ParrasHUB/Index.php">Hoteles</a></h1>
            </div>
            <div class="container-user">
            </div>
        </div>
    </div>
    <div class="container-navbar">
        <nav class="navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="menu">
                <li><a href="/ParrasHUB/hoteles/hoteles.html">Volver</a></li>
                <li><a href="/ParrasHUB/Index.php">Inicio</a></li>
                <li><a href="/ParrasHUB/restaurantes/restauranteborrador.html">Restaurantes</a></li>
                <li><a href="/ParrasHUB/tiendas/tiendas.html">Tiendas</a></li>
                <li><a href="/ParrasHUB/lugares turisticos/lugaresturisticos.html">Lugares Turísticos</a></li>
            </ul>
        </nav>
    </div>
</header>



<div class="container">
        <section class="gallery">
            <img
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/cf/47/61/hotel-posada-las-nubes.jpg?w=700&h=-1&s=1"
                alt="Gallery Img1"
                class="gallery-img-1"
            /><img
                src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/526524985.jpg?k=4d4868dae040b29216130783374d19ab30aaddac9b9c0bb2e13f8e1c60099eda&o=&hp=1"
                alt="Gallery Img2"
                class="gallery-img-2"
            /><img
                src="https://nuvehotel.com/wp-content/uploads/2024/04/003A6025.jpg"
                alt="Gallery Img3"
                class="gallery-img-3"
            /><img
                src="https://cdn-img.readytotrip.com/t/1024x768/content/9d/48/9d4832d3f2dc9f3e1133dce6b02575f1218e925d.jpeg"
                alt="Gallery Img4"
                class="gallery-img-4"
            /><img
                src="https://posadalasnubes.com/wp-content/uploads/2022/06/fondo_servicios.jpg"
                alt="Gallery Img5"
                class="gallery-img-5"
            />
        </section>
        
        <?php if($usuario_logueado): ?>
        <!-- MOSTRAR FORMULARIO SOLO SI EL USUARIO ESTÁ LOGUEADO -->
        <form class="form-group" method="POST" action="/parrasHUB/hoteles/hoteles/procesar_reservar.php">
            <h1 class="text-center">Formulario de Reserva de Hotel</h1>
            <div id="form">
                <h3 class="text-white">Detalles de la Reserva</h3>
                <div id="input">
                    <input type="text" id="input-group" name="destino" placeholder="Destino" required>
                    <input type="date" id="input-group" name="fecha_checkin" placeholder="Fecha de Check-In" required>
                    <input type="date" id="input-group" name="fecha_checkout" placeholder="Fecha de Check-Out" required>
                    <select id="input-group" name="tipo_habitacion" required>
                        <option value="">Tipo de Habitación</option>
                        <option value="Habitación Sencilla">Habitación Sencilla</option>
                        <option value="Habitación Doble">Habitación Doble</option>
                        <option value="Suite">Suite</option>
                        <option value="Penthouse">Penthouse</option>
                    </select>
                </div>
                <div id="input2">
                    <input type="number" id="input-group" name="num_adultos" placeholder="Número de Adultos" min="1" required>
                    <input type="number" id="input-group" name="num_ninos" placeholder="Número de Niños (2-11 años)" min="0">
                    <input type="number" id="input-group" name="num_bebes" placeholder="Número de Bebés (menos de 2 años)" min="0">
                </div>
                <div id="input3">
                    <span id="input-group" class="text-primary">Servicios Adicionales</span>
                    <input type="checkbox" id="desayuno" name="servicios[]" value="Desayuno Incluido">
                    <label class="text-white" for="desayuno">Desayuno Incluido</label>
                    <input type="checkbox" id="gimnasio" name="servicios[]" value="Acceso al Gimnasio">
                    <label class="text-white" for="gimnasio">Acceso al Gimnasio</label>
                    <input type="checkbox" id="transporte" name="servicios[]" value="Servicio de Transporte">
                    <label class="text-white" for="transporte">Servicio de Transporte</label>
                </div>
                <div id="input4">
                    <textarea id="input-group1" name="comentarios" placeholder="Comentarios o Solicitudes Especiales"></textarea>
                </div>
                <div id="input6">
                    <input type="text" id="input-group" name="nombre_completo" placeholder="Nombre Completo" value="<?php echo isset($_SESSION['usuario_nombre']) ? htmlspecialchars($_SESSION['usuario_nombre']) : ''; ?>" required>
                    <input type="tel" id="input-group" name="telefono" placeholder="Número de Teléfono" required>
                    <input type="email" id="input-group1" name="correo" placeholder="Correo Electrónico" value="<?php echo isset($_SESSION['usuario_email']) ? htmlspecialchars($_SESSION['usuario_email']) : ''; ?>" required>
                </div>
                <button type="submit" class="btn btn-warning text-white">Enviar Formulario</button>
                <button type="reset" class="btn btn-primary">Limpiar Formulario</button>
            </div>
        </form>
    <?php else: ?>
        <!-- MOSTRAR MENSAJE DE INICIO DE SESIÓN REQUERIDO -->
        <div class="login-required-message" style="background: #f8f9fa; padding: 20px; border-radius: 5px; text-align: center; margin: 20px 0;">
            <h3>Para realizar reservas, debes iniciar sesión</h3>
            <p>¿Ya tienes una cuenta? <a href="/ParrasHUB/login.php" style="color: #007bff;">Inicia sesión aquí</a></p>
            <p>¿Nuevo usuario? <a href="/ParrasHUB/register.php" style="color: #007bff;">Regístrate ahora</a></p>
        </div>
    <?php endif; ?>
</div>


<div class="mapa-comentarios-container">
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9991090217354!2d-102.17918812483143!3d25.438293321893696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868f49b68b419433%3A0xb759d22704831751!2sHotel%20Nuve%20Parras!5e0!3m2!1ses!2smx!4v1727133339153!5m2!1ses!2smx"
        width="622" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div id="comments">
        <h2>Comentarios</h2>
        <form id="comment-form">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="comment">Comentario:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Enviar comentario</button>
        </form>
        <div id="rating">
            <h3>Calificación del Hotel</h3>
            <span class="star" data-value="1">&#9733;</span>
            <span class="star" data-value="2">&#9733;</span>
            <span class="star" data-value="3">&#9733;</span>
            <span class="star" data-value="4">&#9733;</span>
            <span class="star" data-value="5">&#9733;</span>
            <input type="hidden" id="rating-value" name="rating" value="0">
        </div>

        <div id="comment-list">
            <!-- Aquí se cargarán los comentarios -->
        </div>
    </div>
</div>

    


<footer class="footer">
    <div class="container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>Dirección: 71 Pennington Lane Vernon Rockville, CT 06066</li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>Email: baristas@support.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook"><i class="fa-brands fa-facebook-f"></i></span>
                    <span class="twitter"><i class="fa-brands fa-twitter"></i></span>
                    <span class="youtube"><i class="fa-brands fa-youtube"></i></span>
                    <span class="pinterest"><i class="fa-brands fa-pinterest-p"></i></span>
                    <span class="instagram"><i class="fa-brands fa-instagram"></i></span>
                </div>
            </div>
            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Políticas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
            </div>
            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>
                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de órdenes</a></li>
                    <li><a href="#">Lista de deseos</a></li>
                    <li><a href="#">Boletín</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Cargar detalles del hotel desde el backend
        $.ajax({
            url: 'backend_endpoint_para_detalles_del_hotel.php',
            method: 'GET',
            success: function(data) {
                $('#hotel-info').html(data);
            },
            error: function() {
                $('#hotel-info').html('<p>Error al cargar los detalles del hotel.</p>');
            }
        });

        // Cargar opiniones de los huéspedes desde el backend
        $.ajax({
            url: 'backend_endpoint_para_opiniones.php',
            method: 'GET',
            success: function(data) {
                $('#hotel-reviews').html(data);
            },
            error: function() {
                $('#hotel-reviews').html('<p>Error al cargar las opiniones de los huéspedes.</p>');
            }
        });

        // Manejar envío del formulario de comentarios
        $('#comment-form').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: 'backend_endpoint_para_agregar_comentario.php',
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#hotel-reviews').prepend(response);
                    $('#comment-form')[0].reset();
                },
                error: function() {
                    alert('Error al enviar el comentario.');
                }
            });
        });
    });
</script>
<script src="/hoteles/hoteles/hotel-la-nuve.js"></script>


</html>
</body>
</html>
