function validarCampos(){
    var resultado = true;
    var txtNombre = document.getElementById("nombre");
    var txtApellidos = document.getElementById("apellidos");
    var selectGenero = document.getElementById("select");
    var txtTelefono = document.getElementById("celular");
    var txtFecha = document.getElementById("fecha");
    var txtCorreo = document.getElementById("correo");
    var txtUsuario = document.getElementById("usuario");
    var txtContrasena = document.getElementById("contraseña");
    var checkboxTerminos = document.getElementById("checkbox");

    var letraval = /^[a-z ,.'-]+$/i; //permite letras y espacios
    var valcorreo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var valtelefono = /^[0-9]{10}$/g; //permite datos de hasta 1o numeros
    var valcontrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

    limpiarMensajes();

    //Validacion de nombre
    if(txtNombre.value === ""){
        resultado = false;
        mensaje("Debe ingresar un nombre", txtNombre);
    }
    else if(!letraval.test(txtNombre.value)){
        resultado = false;
        mensaje("El nombre que ingreso no es válido", txtNombre);
    }else if(txtNombre.value.lenght>20){
        resultado=false;
        mensaje("El nombre que ingreso es muy extenso", txtNombre);
    }


    //Validacion de apellido
    if(txtApellidos.value === ""){
        resultado = false;
        mensaje("Debe ingresar un apellido", txtApellidos);
    }
    else if(!letraval.test(txtApellidos.value)){
        resultado = false;
        mensaje("El apellido que ingreso no es válido", txtApellidos);
    }
    else if(txtApellidos.value.lenght>20){
        resultado=false;
        mensaje("El apellido que ingreso es muy extenso", txtApellidos);
    }


    //Validacion para seleccionar el género
    if(selectGenero.value === null||selectGenero.value ==='0'){
        resultado = false;
        mensaje("Debe seleccionar un genero", selectGenero);
    }

    //Validacion para la fecha
    var dato = txtFecha.value;
    var fechaN = new Date(dato);
    var anioN = fechaN.getFullYear();
    var fechaActual = new Date();
    var anioA = fechaActual.getFullYear();

    if(txtFecha.value ===""){
        resultado = false;
        mensaje("Ingrese una fecha", txtFecha);
    }
    if(fechaN > fechaActual){
        resultado = false;
        mensaje("La Fecha no es válida", txtFecha);
    }
    else if(anioN < 1970){
        resultado = false;
        mensaje("El año de nacimiento debe ser mayor a 1970", txtFecha);
    }
    else if((anioA - anioN)<18){
        resultado = false;
        mensaje("Debe ser mayor de edad", txtFecha);
    }



    //Validacion para que el telefono tenga 10 digitos
    if(txtTelefono.value === ""){
        resultado = false;
        mensaje("El telefono es requerido", txtTelefono);
    }
    else if(!valtelefono.test(txtTelefono.value)){
        resultado = false;
        mensaje("El telefono debe tener 10 digitos", txtTelefono);
    }

    //Validacion para Correo
    if(txtCorreo.value === ""){
        resultado = false;
        mensaje("Ingrese un email", txtCorreo);
    }
    else if(!valcorreo.test(txtCorreo.value)){
        resultado = false;
        mensaje("Ingrese una direccion de correo que sea valida", txtCorreo);
    }

    //Validacion para usuario
    if(txtUsuario.value === ""){
        resultado = false;
        mensaje("Ingrese un usuario", txtUsuario);
    }

    //Validacion para contraseña
    if(txtContrasena.value === ""){
        resultado = false;
        mensaje("Ingrese una contraseña", txtContrasena);
    }
    else if(!valcontrasena.test(txtContrasena.value)){
        resultado = false;
        mensaje("La contraseña debe tener entre 8 y 16 caracteres, un numero, una letra minuscula y una mayuscual", txtContrasena);
    }

    //Validar checkbox
    if(!checkboxTerminos.value){
        resultado = false;
        mensaje("Debe aceptar los terminos y condiciones", checkboxTerminos);
    }
        

    return resultado;
}

function mensaje(cadena, item){
    item.focus();
    var nodoPadre = item.parentNode;
    var nodoHijo = document.createElement("span");

    nodoHijo.innerHTML = cadena;
    nodoHijo.style.color = "red";
    nodoHijo.style.marginLeft ="65px"
    nodoHijo.style.display = "block";
    nodoHijo.style.marginBottom="0.5rem";
    nodoHijo.setAttribute("class", "mensaje");

    nodoPadre.appendChild(nodoHijo);
}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensaje");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }

}
