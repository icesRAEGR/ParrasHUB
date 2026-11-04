document.addEventListener("DOMContentLoaded", () => {
    const cartIcon = document.querySelector(".cart");
    const cartContainer = document.querySelector(".cart-products");
    const closeBtn = document.querySelector(".close-btn");
    const cartItemsContainer = document.querySelector(".card-items");
    const totalPriceElement = document.querySelector(".price-total");
    const addToCartButtons = document.querySelectorAll(".btn-add-cart");

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    function updateCartDisplay() {
        cartItemsContainer.innerHTML = "";
        let total = 0;

        cart.forEach((item, index) => {
            total += item.price * item.quantity;
            cartItemsContainer.innerHTML += `
                <div class="item">
                    <img src="${item.image}" alt="${item.title}">
                    <div class="item-content">
                        <h5>${item.title}</h5>
                        <h5 class="cart-price">$${item.price.toFixed(2)}</h5>
                        <div>
                            <button class="decrease" data-index="${index}">-</button>
                            <span>${item.quantity}</span>
                            <button class="increase" data-index="${index}">+</button>
                        </div>
                    </div>
                    <span class="delete-product" data-index="${index}">X</span>
                </div>
            `;
        });

        totalPriceElement.textContent = total.toFixed(2);
        localStorage.setItem("cart", JSON.stringify(cart));

        // Agregar botón de pagar si hay productos en el carrito
        const existingPayButton = document.querySelector(".pay-btn");
        if (cart.length > 0) {
            if (!existingPayButton) {
                const payButton = document.createElement("button");
                payButton.textContent = "Pagar";
                payButton.classList.add("pay-btn");
                payButton.style.display = "block";
                payButton.style.marginTop = "15px";
                payButton.style.padding = "10px";
                payButton.style.width = "100%";
                payButton.style.backgroundColor = "#FFD700";
                payButton.style.border = "none";
                payButton.style.cursor = "pointer";
                payButton.style.fontSize = "16px";
                payButton.style.fontWeight = "bold";

                payButton.addEventListener("click", () => {
                    window.location.href = "pago.html";
                });

                cartContainer.appendChild(payButton);
            }
        } else {
            if (existingPayButton) {
                existingPayButton.remove();
            }
        }
    }

    addToCartButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const parent = button.closest(".carts");
            const title = parent.querySelector(".title").textContent;
            const price = parseFloat(parent.querySelector("p span").textContent);
            const image = parent.querySelector("img").src;

            const existingProduct = cart.find(item => item.title === title);

            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({ title, price, image, quantity: 1 });
            }
            updateCartDisplay();
        });
    });

    cartItemsContainer.addEventListener("click", (event) => {
        if (event.target.classList.contains("increase")) {
            const index = event.target.dataset.index;
            cart[index].quantity += 1;
        } else if (event.target.classList.contains("decrease")) {
            const index = event.target.dataset.index;
            if (cart[index].quantity > 1) {
                cart[index].quantity -= 1;
            } else {
                cart.splice(index, 1);
            }
        } else if (event.target.classList.contains("delete-product")) {
            const index = event.target.dataset.index;
            cart.splice(index, 1);
        }
        updateCartDisplay();
    });

    cartIcon.addEventListener("click", () => {
        cartContainer.style.display = "block";
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            cartContainer.style.display = "none";
        });
    }

    updateCartDisplay();
});