var formulario_contactactenos = document.querySelector("#form_contacto");
formulario_contactactenos.addEventListener("submit", validarCampos);

function validarCampos(event) {
  var resultado = true;
  var txtNombre = document.getElementById("nombre");
  var txtApellido = document.getElementById("apellido");
  var selectEstado = document.getElementById("estadoC");
  var motivo_mensaje = document.getElementsByName("mensaje_motivo");
  var txtEmail = document.getElementById("correo");
  var txtComentario = document.getElementById("comentario");

  var letra = /^[a-z ,.'-]+$/i; // letrasyespacio   ///^[A-Z]+$/i;// solo letras
  var correo =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  limpiarMensajes();

  //validacion motivo del mensaje
  var seleccionar = false;
  for (let i = 0; i < motivo_mensaje.length; i++) {
    if (motivo_mensaje[i].checked) {
      seleccionar = true;
      let res = motivo_mensaje[i].value;

      break;
    }
  }
  if (!seleccionar) {
    resultado = false;
    mensaje("Debe seleccionar un motivo del mensaje", motivo_mensaje[0]);
  }

  //validacion para nombre
  if (txtNombre.value === "") {
    resultado = false;
    mensaje("Nombre es requerido", txtNombre);
  } else if (!letra.test(txtNombre.value)) {
    resultado = false;
    mensaje("Nombre solo debe contener letras", txtNombre);
  } else if (txtNombre.value.length > 20) {
    resultado = false;
    mensaje("Nombre maximo 20 caracteres", txtNombre);
  } else if (txtNombre.value.length < 3) {
    resultado = false;
    mensaje("Por favor, ingrese un nombre valido", txtNombre);
  }

  //validacion para apellido
  if (txtApellido.value === "") {
    resultado = false;
    mensaje("Apellido es requerido", txtApellido);
  } else if (!letra.test(txtApellido.value)) {
    resultado = false;
    mensaje("Apellido solo debe contener letras", txtApellido);
  } else if (txtApellido.value.length > 20) {
    resultado = false;
    mensaje("Apellido maximo 20 caracteres", txtApellido);
  } else if (txtApellido.value.length < 3) {
    resultado = false;
    mensaje("Por favor, ingrese un apellido valido", txtApellido);
  }

  //validacion email
  if (txtEmail.value === "") {
    resultado = false;
    mensaje("Email es requerido", txtEmail);
  } else if (!correo.test(txtEmail.value)) {
    resultado = false;
    mensaje("Email no es correcto", txtEmail);
  }

  //validar estado civil
  if (selectEstado.value === null || selectEstado.value === "0") {
    resultado = false;
    mensaje("Debe seleccionar estado civil", selectEstado);
  }

  //validar comentario
  if (txtComentario.value === "") {
    resultado = false;
    mensaje("Comentario es requerido", txtComentario);
  }

  if (!resultado) {
    event.preventDefault();
  }
} //fin de funcion validarCampos()

function mensaje(cadenaMensaje, elemento) {
  elemento.focus();
  var nodoPadre = elemento.parentNode;
  var nodoMensaje = document.createElement("div");
  nodoMensaje.textContent = cadenaMensaje;
  //nodoMensaje.style.color = "#e74c3c";
  //nodoMensaje.display = "block";
  nodoMensaje.setAttribute("class", "mensajeError");
  nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes() {
  var mensajes = document.querySelectorAll(".mensajeError");
  for (let i = 0; i < mensajes.length; i++) {
    mensajes[i].remove();
  }
}
