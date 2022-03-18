var registrologin = document.querySelector("#registrologin");
registrologin.addEventListener("submit", validarCampos);

function validarCampos(event) {
    var resultado = true;
    var txtCedula = document.getElementById("cedula");
    var txtNombre = document.getElementById("nombre");
    var txtApellido = document.getElementById("apellido");
    var txtEmail = document.getElementById("correo");
    var txtpassword = document.getElementById("password");
    var txtFechaNac = document.getElementById("fecha_nac");
    var combosexo = document.getElementsByName("sexo");

    var cedulaVal = /^[0-9]{10}$/g;
    var letra = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/i;
    var correo =
        /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var contrasenaVal = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    limpiarMensajes();
    //validacion cedula
    if (txtCedula.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese un número de cedula*", txtCedula);
    } else if (!cedulaVal.test(txtCedula.value.trim())) {
        resultado = false;
        mensaje("Ingrese una cedula valida", txtCedula);
    }

    //validacion para nombre
    if (txtNombre.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese sus nombres*", txtNombre);
    } else if (!letra.test(txtNombre.value.trim())) {
        resultado = false;
        mensaje("El nombre solo debe contener letras", txtNombre);
    } else if (txtNombre.value.trim().length > 20) {
        resultado = false;
        mensaje("El nombre es muy largo", txtNombre);
    } else if (txtNombre.value.trim().length < 3) {
        resultado = false;
        mensaje("Por favor, ingrese un nombre valido", txtNombre);
    }

    //validacion para apellido
    if (txtApellido.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese sus apellidos*", txtApellido);
    } else if (!letra.test(txtApellido.value.trim())) {
        resultado = false;
        mensaje("El apellido solo debe contener letras", txtApellido);
    } else if (txtApellido.value.trim().length > 20) {
        resultado = false;
        mensaje("El apellido es muy largo", txtApellido);
    } else if (txtApellido.value.trim().length < 3) {
        resultado = false;
        mensaje("Por favor, ingrese un apellido valido", txtApellido);
    }

    //validacion para email
    if (txtEmail.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese su correo*", txtEmail);
    } else if (!correo.test(txtEmail.value.trim())) {
        resultado = false;
        mensaje("El correo es incorrecto", txtEmail);
    }
    //validar contraseña
    if (txtpassword.value.trim() === "") {
        resultado = false;
        mensaje("Ingrese una contraseña*", txtpassword);
    } else if (!contrasenaVal.test(txtpassword.value.trim())) {
        resultado = false;
        mensaje(
            "La contraseña debe tener entre 8 y 16 caracteres, un dígito, una minúscula y una mayúscula.",
            txtpassword
        );
    }
    //validar fecha_nacimiento
    var dato = txtFechaNac.value;
    var fechaN = new Date(dato);
    var anioN = fechaN.getFullYear();
    var fechaActual = new Date(); // fecha actual
    var anioA = fechaActual.getFullYear();

    if (txtFechaNac.value === "") {
        resultado = false;
        mensaje("Ingrese una fecha*", txtFechaNac);
    }
    if (fechaN > fechaActual) {
        resultado = false;
        mensaje("Fecha no válida", txtFechaNac);
    } else if (anioN < 1950) {
        resultado = false;
        mensaje("Año de nacimiento tiene que ser mayor a 1950", txtFechaNac);
    } else if (anioA - anioN < 18) {
        resultado = false;
        mensaje("Debe ser mayor de edad", txtFechaNac);
    }
    //validar sexo
    var seleccionar = false;
    for (let i = 0; i < combosexo.length; i++) {
        if (combosexo[i].checked) {
            seleccionar = true;
            let res = combosexo[i].value;

            break;
        }
    }
    if (!seleccionar) {
        resultado = false;
        mensaje("Debe seleccionar un sexo", combosexo[0]);
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