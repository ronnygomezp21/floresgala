<?php include "views/templates/header.php";?>
<main><br>
    <div class="container">
        <div style="padding: 15px;">
                <div class="table-responsive">
                <div class="card">
                    <h2 style="color:green; font-size:24px; text-align:center; margin:10px;">
                    Lista de producto
                    </h2>
                    <table class="table table-sm table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="text-align: center">ID</th>
                                <th scope="col" style="text-align: center">Nombre</th>
                                <th scope="col" style="text-align: center">Descripción</th>
                                <th scope="col" style="text-align: center">Precio</th>
                                <th scope="col" style="text-align: center">Categoria</th>
                                <th scope="col" style="text-align: center">Cantidad</th>
                                <th scope="col" style="text-align: center">Provedor</th>
                                <th scope="col" style="text-align: center">Fecha</th>
                                <th scope="col" style="text-align: center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($resultado_consulta as $fila) {
                            ?>
                            <tr>
                                <td align="center"><?php echo $fila['idProducto'] ?></td>
                                <td align="center"><?php echo $fila['Nombre'] ?></td>
                                <td align="center"><?php echo $fila['DescripcionProducto'] ?></td>
                                <td align="center"><?php echo $fila['Precio']?></td>
                                <td align="center"><?php echo $fila['categoria']?></td>
                                <td align="center"><?php echo $fila['Cantidad']?></td>
                                <td align="center"><?php echo $fila['NombreEmpresa']?></td>
                                <td align="center"><?php echo $fila['fecha']?></td>
                                <td align="center">
                                    <a href="editar_producto.php?idProducto=<?php echo $fila['idProducto'] ?>"><i class="fas fa-edit" style="color:green;"></i></a>
                                    <a href="eliminar_producto.php?idProducto=<?php echo $fila['idProducto'] ?>"><i class="fas fa-trash" style="color:red; margin-left:10px;"></i></a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                            
                    <div style="text-align: center; margin-bottom:15px;">
                        <a class="btn btn-primary" href="agregar_producto.php">Agregar producto</a>
                    </div>
                </div>
        </div>
    </div>
</main>
<?php include "views/templates/footer.php";?>