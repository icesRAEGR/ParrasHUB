document.getElementById('comment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Obtener valores del formulario
    let name = document.getElementById('name').value;
    let comment = document.getElementById('comment').value;
    
    // Mostrar el comentario en la lista
    displayComment(name, comment);
    
    // Limpiar el formulario
    document.getElementById('comment-form').reset();
});

function displayComment(name, comment) {
    let date = new Date().toLocaleDateString('es-MX');
    
    // Crear el HTML para el nuevo comentario
    let commentHTML = `
        <div class="comment">
            <p class="author">${name}</p>
            <p>${comment}</p>
            <p class="date">${date}</p>
        </div>
    `;
    
    // Insertar el comentario en la lista
    document.getElementById('comment-list').insertAdjacentHTML('beforeend', commentHTML);
}
$(document).ready(function() {
    // Manejar la selección de estrellas
    $('.star').hover(function() {
        $(this).prevAll().addBack().addClass('selected');
    }, function() {
        $(this).prevAll().addBack().removeClass('selected');
        let rating = $('#rating-value').val();
        $('.star').slice(0, rating).addClass('selected');
    });

    $('.star').click(function() {
        let rating = $(this).data('value');
        $('#rating-value').val(rating);
        $('.star').removeClass('selected');
        $('.star').slice(0, rating).addClass('selected');
    });
});

