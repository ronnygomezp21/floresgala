const flores = document.getElementById("lista_flores");
const carrito = document.getElementById("carrito");
const listaFlores = document.querySelector("#lista-carrito tbody");
const vaciarCarritoBtn = document.getElementById("vaciar-carrito");

//funciones para agregar al carrito los productos
cargarEventListeners();

function cargarEventListeners() {
    flores.addEventListener("click", comprarFlores);
    carrito.addEventListener("click", eliminarFlor);
    vaciarCarritoBtn.addEventListener("click", vaciarCarrito);
}

function comprarFlores(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const flor = e.target.parentElement.parentElement;
        leerDatosFlor(flor);
    }
}

function leerDatosFlor(flor) {
    const infoFlor = {
        imagen: flor.querySelector('img').src,
        titulo: flor.querySelector('h2').textContent,
        precio: flor.querySelector('.precio').textContent,
        id: flor.querySelector('button').getAttribute('data-id')
    }

    insertarCarrito(infoFlor);
}

function insertarCarrito(flor) {
    const row = document.createElement('tr');
    row.innerHTML = `
       <td>
           <img src="${flor.imagen}" width=60> 
       </td> 
       <td style="font-size:15px;">${flor.titulo}</td>
       <td style="font-size:15px;">${flor.precio}</td>
       <td>
        <button data_id="${flor.id}" class="btn btn-danger d-block mx-auto borrar-flor">x</button>
       </td>  
    `;
    //swal("Agregado!","Se agrego al carrito.","success");
    alert('Se agrego al carrito');
    listaFlores.appendChild(row);
}

function eliminarFlor(e) {
    e.preventDefault();

    let flor,
        florId;

    if (e.target.classList.contains('borrar-flor')) {
        e.target.parentElement.parentElement.remove();
        flor = e.target.parentElement.parentElement;
        florId = flor.querySelector('button').getAttribute('data-id');
    }
}

function vaciarCarrito() {
  
    while (listaFlores.firstChild) {
        listaFlores.removeChild(listaFlores.firstChild);
    }
    
    return false;
}

function validarBtnVacio() {
    var tbl = document.querySelector("#lista-carrito tbody");

    if (tbl.rows.length == 0) {
        alert('El carrito ya se encuentra vacio!');
        //swal("Vacio!","El carrito ya se encuentra vacio!","error");
    } else{
        alert('El carrito se vacio!');
    }
}

/*contador de items
window.onload = function () {
    var contador = 0;
    const botones=document.querySelectorAll("#lista_flores button");

    botones.forEach(el => {
        el.addEventListener("click", contar);
    });
 
    function contar()
    {
        contador++;
        document.getElementById("count").innerHTML = contador
    }
}*/

//funciones para cambiar de imagen en la pagina
function cambiar(){
  document.getElementById('amor').src="img/Amor1.png";
}

function volver(){
  document.getElementById('amor').src="img/Amor.png";
}

function cambiarC(){
  document.getElementById('cumpleanos').src="img/Cumpleaños1.png";
}

function volverC(){
  document.getElementById('cumpleanos').src="img/Cumpleaños.png";
}

function cambiarCo(){
  document.getElementById('condolencias').src="img/condolencias1.png";
}

function volverCo(){
  document.getElementById('condolencias').src="img/condolencias.png";
}