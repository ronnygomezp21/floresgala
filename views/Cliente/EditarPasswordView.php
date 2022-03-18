<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h5 class="card-header">Cambiar Contraseña</h5>
                    <div class="card-body">
                        <form id="editarpassword" action="index.php?c=cliente&a=password" method="POST" class="row g-2">
                            <input type="hidden" name="id_usuario" id="id_usuario"
                                value="<?php echo $cliente['id_usuario']; ?>" />
                            <div class="col-md-4"><label>Contraseña:</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="col-md-4">
                                <label>Repita Contraseña:</label>
                                <input class="form-control" type="password" name="password1" id="password1">
                            </div><br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Cambiar</button>
                                <a class="btn btn-secondary" href="index.php?c=cliente&a=index">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="assets/js/password.js"></script>
<?php include "views/templates/footer.php";?>