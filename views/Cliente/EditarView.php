<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h5 class="card-header">Editar Perfil</h5>
                    <div class="card-body">
                        <form action="index.php?c=cliente&a=editar" method="POST" class="row g-2">
                            <input type="hidden" name="id_usuario" id="id_usuario"
                                value="<?php echo $cliente['id_usuario']; ?>" />
                            <div class="col-md-4"><label>Nombres:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre"
                                    value="<?php echo $cliente['nombres']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Apellidos:</label>
                                <input class="form-control" type="text" name="apellido" id="apellido"
                                    value="<?php echo $cliente['apellidos']; ?>">
                            </div><br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Editar</button>
                                <a class="btn btn-secondary" href="index.php?c=cliente&a=index">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>