var formulario_inicio_sesion = document.querySelector("#form_inicio_sesion");
formulario_inicio_sesion.addEventListener("submit", validarCampos);

function validarCampos(event) {
  var resultado = true;
  var selecionar_rol = document.getElementById("opciones_rol");
  var txtNombre_usuario = document.getElementById("nombre_usuario");
  var txtCorreo = document.getElementById("correo");
  var txtContrasena = document.getElementById("contrasena");
  var txtCodigo_verificacion = document.getElementById("codigo_verificacion");
 

  var letra = /^[a-z ,.'-]+$/i; // letrasyespacio   ///^[A-Z]+$/i;// solo letras
  var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  var contrasenaVal=/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

  limpiarMensajes();

  //validar rol
  if (selecionar_rol.value === null || selecionar_rol.value === "0") {
    resultado = false;
    mensaje("Por favor selecione un rol", selecionar_rol);
  }

  //validacion para nombre de usuario
  if (txtNombre_usuario.value === "") {
    resultado = false;
    mensaje("Nombre de usuario requerido", txtNombre_usuario);
  } else if (txtNombre_usuario.value.length < 4) {
    resultado = false;
    mensaje("Nombre de usuario muy corto", txtNombre_usuario);
  }

  //validacion correo
  if (txtCorreo.value === "") {
    resultado = false;
    mensaje("Email es requerido", txtCorreo);
  } else if (!correo.test(txtCorreo.value)) {
    resultado = false;
    mensaje("Email no es correcto", txtCorreo);
  }

  //validar contraseña
  if(txtContrasena.value===""){
        resultado=false;
        mensaje("Ingrese una contraseña*", txtContrasena);
    }else if(!contrasenaVal.test(txtContrasena.value)){
        resultado=false;
        mensaje("La contraseña debe tener entre 8 y 16 caracteres, un dígito, una minúscula y una mayúscula.",txtContrasena);
    }

  //validar codigo verificacion
  if(txtCodigo_verificacion.value===""){
        resultado=false;
        mensaje("Ingrese codigo de verificacion*", txtCodigo_verificacion);
  }

  if (!resultado) {
    event.preventDefault();
  }
} //fin de funcion validarCampos()

function mensaje(cadenaMensaje, elemento) {
  elemento.focus();
  var nodoPadre = elemento.parentNode;
  var nodoMensaje = document.createElement("span");
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
