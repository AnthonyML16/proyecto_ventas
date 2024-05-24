<div class="container-fluid px-4">
    <h1 class="mt-4">CLIENTES</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Clientes</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista de clientes
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 0;
                    foreach ($clientes as $key => $value) {
                        $n++;
                        $id_cliente = $value['id_cliente'];
                        $nom_cliente = $value['nom_cliente'];
                        $ape_cliente = $value['ape_cliente'];
                        $dni_cliente = $value['dni_cliente'];
                        $cel_cliente = $value['cel_cliente'];
                        $email_cliente = $value['email_cliente'];
                        $dir_cliente = $value['dir_cliente'];

                        $id_modal = "#modal" . $id_cliente;
                        $modal = "modal" . $id_cliente;
                    ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $nom_cliente; ?></td>
                            <td><?php echo $ape_cliente; ?></td>
                            <td><?php echo $dni_cliente; ?></td>
                            <td><?php echo $cel_cliente; ?></td>
                            <td><?php echo $email_cliente; ?></td>
                            <td><?php echo $dir_cliente; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo $id_modal; ?>">Editar</button>
                            </td>
                            <td>
                                <button name="eliminar" type="button" value="<?php echo $id_cliente; ?>" class="btn btn-sm btn-danger" onclick="return Eliminar(this);">Eliminar</button>

                            </td>
                        </tr>

                        <div class="modal fade" id="<?php echo $modal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CLIENTE</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="cliente_editar.php" method="post">
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <input type="text" name="nom" value="<?php echo $nom_cliente; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" name="ape" value="<?php echo $ape_cliente; ?>" class="form-control" placeholder="Apellidos" aria-label="Apellidos" required="required">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="number" name="dni" value="<?php echo $dni_cliente; ?>" class="form-control" placeholder="DNI" aria-label="DNI" min="10000000" max="99999999" required="required">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="number" name="cel" value="<?php echo $cel_cliente; ?>" class="form-control" placeholder="Celular" aria-label="Celular" min="100000000" max="999999999" required="required">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="email" name="email" value="<?php echo $email_cliente; ?>" class="form-control" placeholder="Email" aria-label="Email" required="required">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="text" name="dir" value="<?php echo $dir_cliente; ?>" class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" name="actualizar" value="<?php echo $id_cliente; ?>" class="btn btn-primary">Actualizar</button>
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