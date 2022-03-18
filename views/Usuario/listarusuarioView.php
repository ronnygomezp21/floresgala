<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div class="card">
            <h5 class="card-header text-center">Lista de usuario</h5>
            <div class="card-body">
                <!--div style="text-align: center;">
                    <a class="btn btn-primary btn-sm" href="index.php?c=usuario&a=nuevo"><i
                            class="bi bi-person-plus-fill"></i>
                        Agregar Usuario</a>
                </div-->
                <div style="padding: 15px;">
                    <div class="table-responsive">
                        <table id="tabla_empleado" class="table table-striped table-bordered table-hover"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Cedula</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>fecha Nacimiento</th>
                                    <th>Estado</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($resultado_consulta as $fila) {
                                ?>
                                <tr>
                                    <td><?php echo $fila['cedula'] ?></td>
                                    <td><?php echo $fila['apellidos'] ?></td>
                                    <td><?php echo $fila['nombres'] ?></td>
                                    <td><?php echo $fila['correo'] ?></td>
                                    <td><?php echo $fila['fecha_nacimiento'] ?></td>
                                    <td><?php echo $fila['estado'] ?></td>
                                    <td><?php echo $fila['nombre'] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="index.php?c=usuario&a=editar&id=<?php echo $fila['id_usuario'] ?>"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-danger btn-sm"
                                            onclick="if(!confirm('¿Esta seguro de eliminar el usuario?'))return false;"
                                            href="index.php?c=usuario&a=eliminar&id=<?php echo $fila['id_usuario']; ?>"><i
                                                class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>