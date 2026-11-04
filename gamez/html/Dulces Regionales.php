<?php
// Iniciar sesión (si no está iniciada)
session_start();

// Verificar si hay una sesión activa
$isLoggedIn = isset($_SESSION['usuario']); // Cambia 'usuario' por tu variable de sesión real
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="/ParrasHUB/gamez/images/favicon.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulces Regionales - Carrito de Compras</title>
    <link rel="stylesheet" href="/ParrasHUB/gamez/css/carrito.css">
    <style>
        .btn-add-cart.hidden {
            display: none;
        }
        .login-message {
            color: #d32f2f;
            font-size: 0.9em;
            margin-top: 5px;
        }
        .user-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-section container">
            <a href="/index.html"><img class="logo" src="/ParrasHUB/gamez/img/logocircular.png" alt="Logo Dulces Regionales"></a>
            <h1 class="titulo">DULCES REGIONALES</h1>
            <div class="user-controls">
                <div id="login-section">
                    <?php if($isLoggedIn): ?>
                        <span>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                        <a href="/ParrasHUB/gamez/logout.php">Cerrar sesión</a>
                    <?php else: ?>
                        <a href="/ParrasHUB/gamez/login.php">Iniciar sesión</a>
                    <?php endif; ?>
                </div>
                <div class="cart-container">
                    <img onclick="showCart()" class="cart" src="/ParrasHUB/gamez/img/shopping_cart_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="Carrito de compras">
                    <p class="count-product">0</p>
                </div>
            </div>
            <div class="cart-products" id="products-id">
                <p class="close-btn" onclick="closeBtn()">X</p>
                <h3>Mi carrito</h3>
                <div class="card-items">
                    <!-- Los productos del carrito se agregarán dinámicamente -->
                </div>
                <h2>Total: $<strong class="price-total">0</strong></h2>
            </div>
        </div>
    </header>
    
    <section class="container">
        <div class="products">
            <!-- Producto 1 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/abuelo.png" alt="Dulce Abuelito">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Abuelito</p>
                <a href="#" data-id="1" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
            
            <!-- Producto 2 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/Corazon de leche.png" alt="Corazón de leche">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Corazón de leche</p>
                <a href="#" data-id="2" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
            
            <!-- Producto 3 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/Rollo de guallava.png" alt="Rollo de guayaba">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Rollo de guayaba</p>
                <a href="#" data-id="3" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
            
            <!-- Producto 4 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/Nuez garampiñada.png" alt="Nuez garapiñada">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Nuez garapiñada</p>
                <a href="#" data-id="4" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
            
            <!-- Producto 5 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/Baso de tamarindo.png" alt="Vaso de tamarindo">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Vaso de tamarindo</p>
                <a href="#" data-id="5" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
            
            <!-- Producto 6 -->
            <div class="carts">
                <div>
                    <img src="/ParrasHUB/gamez/DULCES/Dulce de coco.png" alt="Dulce de coco">
                    <p><span>25</span>$</p>
                </div>
                <p class="title">Dulce de coco</p>
                <a href="#" data-id="6" class="btn-add-cart <?php echo !$isLoggedIn ? 'hidden' : ''; ?>">Agregar al carrito</a>
                <?php if(!$isLoggedIn): ?>
                    <p class="login-message">Inicia sesión para comprar</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="copy">
            <p>Nuestro negocio está dedicado a la venta de campechanas, dulces regionales y pan dulce, 
                con la mejor calidad para nuestros clientes. Esperamos su visita en nuestro horario de venta.</p>
        </div>
        <div class="redes">
            <a href="https://www.facebook.com/share/1BFsLHPNRc/" target="_blank" rel="noopener noreferrer">
                <img src="/ParrasHUB/gamez/img/facebook.png" alt="Facebook"><p>Facebook</p>
            </a>
            <a href="https://api.whatsapp.com/send?phone=8421122636" target="_blank" rel="noopener noreferrer">
                <img src="/ParrasHUB/gamez/img/whatsapp.png" alt="WhatsApp"><p>WhatsApp</p>
            </a>
        </div>
        <div class="informacion">
            <p>&copy; 2025 Todos los derechos reservados</p>
            <a href="/ParrasHUB/gamez/html/Información.html">Más información</a>
        </div>
    </footer>

    <script>
        function showCart() {
            <?php if(!$isLoggedIn): ?>
                alert('Por favor inicia sesión para ver tu carrito');
                return false;
            <?php endif; ?>
            document.getElementById("products-id").style.display = "block";
            return false;
        }
        
        function closeBtn() {
            document.getElementById("products-id").style.display = "none";
        }
    </script>
    
    <script src="/ParrasHUB/gamez/js/Carrito Mercado Libre.js"></script>
</body>
</html>