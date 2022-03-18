var login = document.querySelector("#login");
login.addEventListener("submit", validarLogin);

function validarLogin(event) {
    var resultado = true;
    var txtCedula = document.getElementById("cedula");
    var txtClave = document.getElementById("password");
    var cedulaVal = /^[0-9]{10}$/g;
    limpiarMensajes();

    //validacion cedula
    if (txtCedula.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese su número de cedula*", txtCedula);
    } else if (!cedulaVal.test(txtCedula.value.trim())) {
        resultado = false;
        mensaje("Ingrese una cedula valida", txtCedula);
    }
    if (txtClave.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese su clave*", txtClave);
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