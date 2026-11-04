<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Js</title>
    <link rel="stylesheet" href="/css/carrito.css">
</head>
<body>
    <?php include 'bdCarrito.phps'; ?>
    <header>
        <div class="header-section container">
            <img class="logo" src="/img/logocircular.png" alt="">
            <h1 class="titulo">CAMPECHANA</h1>
            <div>
                <img onclick="showCart(this)" class="cart" src="/img/shopping_cart_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png" alt="">
                <p class="count-product">0</p>
            </div>
            <div class="cart-products" id="products-id">
                <p class="close-btn" onclick="closeBtn()">X</p>
                <h3>Mi carrito</h3>
                <div class="card-items">
                    <!-- Products will be listed here -->
                    <?php
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='item'>
                                    <img src='" . $row['image'] . "' alt=''>
                                    <div class='item-content'>
                                        <h5>" . $row['name'] . "</h5>
                                        <h5 class='cart-price'>" . $row['price'] . "$</h5>
                                        <h6>Amount: 1</h6>
                                    </div>
                                    <span class='delete-product' data-id='" . $row['id'] . "'>X</span>
                                  </div>";
                        }
                    } else {
                        echo "No products found.";
                    }
                    ?>
                </div>
                <h2>Total: $<strong class="price-total">0</strong></h2>
            </div>
        </div>
    </header>

    <section class="container">
        <div class="products">
            <!-- Dynamic product list -->
            <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='carts'>
                            <div>
                                <img src='" . $row['image'] . "' alt=''>
                                <p><span>" . $row['price'] . "</span>$</p>
                            </div>
                            <p class='title'>" . $row['name'] . "</p>
                            <a href='#' data-id='" . $row['id'] . "' class='btn-add-cart'>Agregar al carrito</a>
                          </div>";
                }
            } else {
                echo "No products found.";
            }
            ?>
        </div>
    </section>

    <footer>
        <p class="author">🪐 by <a href="https://github.com/garu2" target="_blank">GaryAT</a></p>
    </footer>

    <script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }
    </script>
    <script src="/js/Carrito Mercado Libre.js"></script>
</body>
</html>
