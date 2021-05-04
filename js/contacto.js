const boton = document.querySelector('.botonForm');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#message');
const errorMail = document.querySelector('.errorMail');
const errorMensaje = document.querySelector('.errorMensaje');

boton.addEventListener('click', (e) => {
    e.preventDefault()

    if (email.value.trim() == '') {
        errorMail.style.color = "red";
        errorMail.textContent = "Escriba su mail";
    } else {
        errorMail.style.color = "green";
        errorMail.textContent = "Bien ahi!";
    }

    if (mensaje.value <= 6) {
        errorMensaje.style.color = "red";
        errorMensaje.textContent = "Escriba mas de seis caracteres";
    } else {
        errorMensaje.style.color = "green";
        errorMensaje.textContent = "Ok!";
    }
})