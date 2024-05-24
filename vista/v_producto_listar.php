<div class="container-fluid px-4">
    <h1 class="mt-4">PRODUCTOS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Productos</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Lista de productos
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Precio Compra (S/.)</th>
                        <th>Precio Venta (S/.)</th>
                        <th>Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Precio Compra (S/.)</th>
                        <th>Precio Venta (S/.)</th>
                        <th>Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 0;
                    foreach ($productos as $key => $value) {
                        $n++;
                        $id_producto = $value['id_producto'];
                        $nom_producto = $value['nom_producto'];
                        $prev_producto = $value['prev_producto'];
                        $prec_producto = $value['prec_producto'];
                        $desc_producto = $value['desc_producto'];

                        $id_modal = "#modal" . $id_producto;
                        $modal = "modal" . $id_producto;
                    ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $nom_producto; ?></td>
                            <td><?php echo $prec_producto; ?></td>
                            <td><?php echo $prev_producto; ?></td>
                            <td><?php echo $desc_producto; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                            </td>
                            <td>
                                <button name="eliminar" type="button" value="<?php echo $id_producto; ?>" class="btn btn-sm btn-danger" onclick="return Eliminar(this);">Eliminar</button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUCTO</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="producto_editar.php" method="post">
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-12">
                                                    <label for="recipient-name" class="col-form-label">Nombres:</label>
                                                    <input type="text" name="nom" value="<?php echo $nom_producto; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="message-text" class="col-form-label">Precio Compra:</label>
                                                    <input type="text" name="prec" value="<?php echo $prec_producto; ?>" class="form-control" placeholder="Precio de compra" aria-label="Precio de compra" min="0" required="required">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="message-text" class="col-form-label">Precio Venta:</label>
                                                    <input type="text" name="prev" value="<?php echo $prev_producto; ?>" class="form-control" placeholder="Precio de venta" aria-label="Precio de venta" min="0" required="required">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="message-text" class="col-form-label">Descripción:</label>
                                                    <input type="text" name="desc" value="<?php echo $desc_producto; ?>" class="form-control" placeholder="Descripción" aria-label="Descripción" required="required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" name="actualizar" value="<?php echo $id_producto; ?>" class="btn btn-primary">Actualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>