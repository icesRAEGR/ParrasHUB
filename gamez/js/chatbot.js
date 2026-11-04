document.addEventListener("DOMContentLoaded", function () {
    const helpButton = document.getElementById("help-button");
    const chatContainer = document.getElementById("chat-container");

    helpButton.addEventListener("click", function () {
        chatContainer.classList.toggle("hidden");
    });
});

function sendMessage(question) {
    const chatBox = document.getElementById("chat-box");
    chatBox.innerHTML += `<div class='message user'>${question}</div>`;
    let answer = "";
    if (question.includes("precios")) answer = "Nuestros precios varían según el producto. Contáctanos para más información.";
    if (question.includes("envíos")) answer = "Sí, hacemos envíos dentro de la ciudad con un precio fijo de $20.";
    if (question.includes("horarios")) answer = "Nuestro horario de atención es de 7:00 AM a 11:00 PM todos los días.";
    if (question.includes("contacto")) answer = "Estos son nuestros números de contacto 842-112-2009 o al teléfono 842-690-37-82.";
    
    setTimeout(() => {
        chatBox.innerHTML += `<div class='message bot'>${answer}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;
    }, 1000);
}