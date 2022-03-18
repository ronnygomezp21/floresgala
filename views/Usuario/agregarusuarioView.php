<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h5 class="card-header">Registrar Usuario</h5>
                    <div class="card-body">
                        <form action="index.php?c=usuario&a=nuevo" method="POST" class="row g-2">
                            <div class="col-md-4"> <label>Cedula:</label>
                                <input maxlength="10" class="form-control" type="text" name="cedula" id="cedula">
                            </div>
                            <div class="col-md-4"><label>Nombres:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre">
                            </div>
                            <div class="col-md-4">
                                <label>Apellidos:</label>
                                <input class="form-control" type="text" name="apellido" id="apellido">
                            </div>
                            <div class="col-md-4"><label>Correo:</label>
                                <input class="form-control" type="text" name="correo" id="correo">
                            </div>
                            <div class="col-md-4"><label>Contraseña:</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="col-md-3"><label>Fecha nacimiento:</label>
                                <input class="form-control" type="date" name="fecha_nac" id="fecha_nac">
                            </div>
                            <div class="col-md-3">
                                <label class="sexo">Sexo:</label>
                                <input class="form-check-input" type="radio" name="sexo" id="m"
                                    value="M" />
                                <label class="form-check-label">Masculino</label>
                            </div>
                            <div class="col-md-3">
                                <input class="form-check-input" type="radio" name="sexo" id="f" value="F" />
                                <label class="form-check-label">Femenino</label>
                            </div>
                            <div class="col-md-4">
                                <label>Rol:</label>
                                <select class="form-select" name="rol" id="rol">
                                    <option value="0">Seleccione...</option>
                                    <?php foreach ($roles as $fila) {?>
                                    <option value="<?php echo $fila->id_rol ?>"><?php echo $fila->nombre; ?></option>
                                    <?php }?>
                                </select>
                            </div><br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Agregar</button>
                                <a class="btn btn-secondary" href="index.php?c=usuario&a=index">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>