/*function LlenarComboCategorias() {
    var url = "index.php?c=categoria&a=buscarCategorias";
    var xmlh = new XMLHttpRequest();
    xmlh.open("GET", url, true);
    xmlh.send();
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var resultados = xmlh.responseText;
            var objJson = JSON.parse(resultados);
            html = "";
            for (var i = 0; i < objJson.length; i++) {
                html +=
                    "<option value=" +
                    objJson[i].idcategoria +
                    ">" +
                    objJson[i].Descripcion +
                    "</option>";
            }
            document.getElementById("categoria").innerHTML = html;
        }
    };
}*/
CrearCardProductos();
function CrearCardProductos() {
    var id_categoria = document.getElementById('categoria').value;
    var url = 'index.php?c=producto&a=buscarProductos&ca=' + id_categoria;
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var resultados = xmlh.responseText;
            var objJson = JSON.parse(resultados);
            html = '';
            for (var i = 0; i < objJson.length; i++) {
                html += '<div class="col-md-3">'
                    + '<div class="card h-100">'
                    + '<img class="img-fluid" src="assets/img/arreglo1.jpg" class="card-img-top" alt="vacio">'
                    + '<div class="card-body">'
                    + ' <h5 class="card-title">' + objJson[i].Nombre + '</h5>'
                    + '<p class="card-text">$' + objJson[i].Precio + '</p>'
                    + '<button id="' + objJson[i].idProducto + '" class="form-control btn-success"><i class="bi bi-cart-plus">Agregar</i></button>'
                    + '</div>'
                    + '</div>'
                    + '</div>';
            }
            document.getElementById('productos').innerHTML = html;
        }
    };
}
