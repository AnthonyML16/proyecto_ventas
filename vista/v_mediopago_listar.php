<div class="container-fluid px-4">
    <h1 class="mt-4">MEDIOS DE PAGO</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Medio de pago</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Lista de medios de pago
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 0;
                    foreach ($mediopagos as $key => $value) {
                        $n++;
                        $id_mediopago = $value['id_mediopago'];
                        $nom_mediopago = $value['nom_mediopago'];

                        $id_modal = "#modal" . $id_mediopago;
                        $modal = "modal" . $id_mediopago;
                    ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $nom_mediopago; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                            </td>
                            <td>
                                <button name="eliminar" type="button" value="<?php echo $id_mediopago; ?>" class="btn btn-sm btn-danger" onclick="return Eliminar(this);">Eliminar</button>

                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MEDIO DE PAGO</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="mediopago_editar.php" method="post">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                <input type="text" name="nom" value="<?php echo $nom_mediopago; ?>" class="form-control" placeholder="Nombre" aria-label="Nombre" required="required">
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" name="actualizar" value="<?php echo $id_mediopago; ?>" class="btn btn-primary">Actualizar</button>
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