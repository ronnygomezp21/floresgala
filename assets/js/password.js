var editarpassword = document.querySelector("#editarpassword");
editarpassword.addEventListener("submit", validarPassword);

function validarPassword(event) {
    var resultado = true;
    var txtpassword = document.getElementById("password");
    var txtpassword1 = document.getElementById("password1");

    var contrasenaVal = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    limpiarMensajes();

    if (txtpassword.value === "") {
        resultado = false;
        mensaje("Ingrese una contraseña*", txtpassword);
    } else if (!contrasenaVal.test(txtpassword.value)) {
        resultado = false;
        mensaje(
            "La contraseña debe tener entre 8 y 16 caracteres, un dígito, una minúscula y una mayúscula.",
            txtpassword
        );
    }

    if (txtpassword1.value === "") {
        resultado = false;
        mensaje("Ingrese la confirmacion de contraseña*", txtpassword1);
    } else if (txtpassword1.value != txtpassword.value) {
        resultado = false;
        mensaje("La contrasena no coincide*", txtpassword1);
    }
    if (!resultado) {
        event.preventDefault();
    }
}
function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = cadenaMensaje;
    nodoMensaje.setAttribute("class", "mensajeError");
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();
    }
}
