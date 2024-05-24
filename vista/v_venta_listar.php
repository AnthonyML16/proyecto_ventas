<div class="container-fluid px-4">
    <h1 class="mt-4">VENTAS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Ventas</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Lista de Ventas
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Medio Pago</th>
                        <th>Tipo Comprobante</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Medio Pago</th>
                        <th>Tipo Comprobante</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 0;
                    foreach ($ventas as $key => $value) {
                        $n++;
                        $id_venta = $value['id_venta'];
                        $nom_cliente = $value['nom_cliente'];
                        $ape_cliente = $value['ape_cliente'];
                        $nom_usuario = $value['nom_usuario'];
                        $ape_usuario = $value['ape_usuario'];
                        $nom_mediopago = $value['nom_mediopago'];
                        $nom_tipocomprobante = $value['nom_tipocomprobante'];
                        $fec_venta = $value['fec_venta'];
                        $est_venta = $value['est_venta'];
                        if ($est_venta == 1) {
                            $estado = "Activo";
                        } else {
                            $estado = "Anulado";
                        }
                    ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $id_venta; ?></td>
                            <td><?php echo $nom_cliente . " " . $ape_cliente; ?></td>
                            <td><?php echo $nom_mediopago; ?></td>
                            <td><?php echo $nom_tipocomprobante; ?></td>
                            <td><?php echo $nom_usuario . " " . $ape_usuario; ?></td>
                            <td><?php echo $fec_venta; ?></td>
                            <td><?php echo $estado; ?></td>
                            <td>
                                <button name="anular" type="button" value="<?php echo $id_venta; ?>" class="btn btn-sm btn-danger" onclick="return Anular(this);">Anular</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>