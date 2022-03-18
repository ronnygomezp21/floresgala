<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="form-group col-md-3">
            <Label class="form-label">Categorias:</Label>
            <select class="form-select" name="categoria" id="categoria" onclick="CrearCardProductos()">
                <option value="todos">Todos</option>
                <?php foreach ($cat as $row) { ?>
                <option value="<?php echo $row["idcategoria"]; ?>"><?php echo $row["Descripcion"]; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="card-body">
            <div id="productos" class="row gy-2 gx-2">
                <?php //foreach($resultado_consulta as $producto){?>
                <!--div class="col-md-3">
                    <div class="card h-100">
                        <img class="img-fluid" src="../../assets/img/arreglo1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php //echo $producto['Nombre'] ?></h5>
                            <p class="card-text"><?php //echo $producto['Descripcion'] ?></p>
                            <p class="card-text">$<?php //echo $producto['Precio'] ?></p>
                            <button class="form-control btn-success"><i class="bi bi-cart-plus">Agregar</i></button>
                        </div>
                    </div>
                </div-->
                <?php //}?>
            </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>
<script src="assets/js/categoria.js"></script>