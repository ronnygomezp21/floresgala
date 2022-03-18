<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <h5 class="card-header">Registrar Usuario</h5>
                    <div class="card-body">
                        <form action="index.php?c=usuario&a=editar" method="POST" class="row g-2">
                            <input type="hidden" name="id_usuario" id="id_usuario"
                                value="<?php echo $usuario['id_usuario']; ?>" />
                            <div class="col-md-4"> <label>Cedula:</label>
                                <input readonly maxlength="10" class="form-control" type="text" name="cedula" id="cedula"
                                    value="<?php echo $usuario['cedula']; ?>">
                            </div>
                            <div class="col-md-4"><label>Nombres:</label>
                                <input class="form-control" type="text" name="nombre" id="nombre"
                                    value="<?php echo $usuario['nombres']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Apellidos:</label>
                                <input class="form-control" type="text" name="apellido" id="apellido"
                                    value="<?php echo $usuario['apellidos']; ?>">
                            </div>
                            <div class="col-md-4"><label>Correo:</label>
                                <input class="form-control" type="text" name="correo" id="correo"
                                    value="<?php echo $usuario['correo']; ?>">
                            </div>
                            <div class="col-md-3"><label>Fecha nacimiento:</label>
                                <input class="form-control" type="date" name="fecha_nac" id="fecha_nac"
                                    value="<?php echo $usuario['fecha_nacimiento']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Rol:</label>
                                <select class="form-select" name="rol" id="rol">
                                    <option value="0">Seleccione...</option>
                                    <?php
                                        foreach ($roles as $fila) {
                                        $selected='';
                                        if($fila->id_rol == $usuario['id_rol']){
                                         $selected='selected="selected"';
                                        }
                                        echo  "<option ".$selected." value='".$fila->id_rol."'>".$fila->nombre."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="sexo">Sexo:</label><br>
                                <input type="radio" name="sexo" id="sexo" value="M"
                                    <?php 
                                    if($usuario['sexo']=='M'){
                                        echo 'checked';}?>>
                                        <label>Masculino</label>
                                    <input type="radio" name="sexo" id="sexo" value="F"
                                    <?php if($usuario['sexo']=='F'){  
                                        echo 'checked';}?>>
                                        <label>Femenino</label>
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