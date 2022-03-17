<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="card-body">
            <div class="row gy-2 gx-2">
                <?php foreach($resultado_consulta as $producto){?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="img-fluid" src="../../assets/img/arreglo1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['Nombre'] ?></h5>
                            <p class="card-text">$<?php echo $producto['Precio'] ?></p>
                            <button class="form-control btn-success">Agregar <i class="bi bi-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>