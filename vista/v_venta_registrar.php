<div class="container-fluid px-4">
  <h1 class="mt-4">VENTAS</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Ventas</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Registrar nueva venta
    </div>
    <div class="card-body">
      <form action="venta_registrar.php" method="post">
        <div class="row g-3">
          <div class="col-md-5">
            <select name="pro" class="form-control" required>
              <option value="" selected disabled>Seleccionar producto</option>
              <?php
              foreach ($producto as $key => $value) {
                $id_producto = $value['id_producto'];
                $nom_producto = $value['nom_producto'];
                $prev_producto = $value['prev_producto'];
              ?>
                <option value="<?php echo $id_producto; ?>"><?php echo $nom_producto . " (" . $prev_producto . ")"; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="col-md-5">
            <input type="number" value="1" min="1" step="0.1" name="cant" class="form-control" placeholder="Cantidad" aria-label="Cantidad" required="required">
          </div>

          <div class="col-md-2">
            <button type="submit" name="agregar" class="btn btn-success">Agregar</button>
          </div>
        </div>
      </form>

      <hr>

      <form action="venta_registrar.php" method="post">
        <table class="table">
          <tr>
            <th></th>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th></th>
          </tr>
          <?php
          $c = 0;
          if (isset($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $producto) {
              $c++;
              $id = $producto['id'];
              $nombre = $producto['nombre'];
              $precio = $producto['precio'];
              $cantidad = $producto['cantidad'];
              $total = $producto['total'];
          ?>
              <tr>
                <td><?php echo $c; ?></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $precio; ?></td>
                <td><?php echo $cantidad; ?></td>
                <td><?php echo $total; ?></td>
                <td>
                  <button type="submit" name="eliminar" value="<?php echo $id; ?>" class="btn btn-danger"><i class="fas fa-remove"></i></button>
                </td>
              </tr>
          <?php
            }
          }

          if ($c == 0) {
            $btn_dis = "disabled";
          } else {
            $btn_dis = "";
          }
          ?>
        </table>
      </form>



      <form action="venta_registrar.php" method="post">
        <div class="row g-3">
          <div class="col-md-4">
            <select name="cli" class="form-control" required>
              <option value="" selected disabled>Seleccionar cliente</option>
              <?php
              foreach ($cliente as $key => $value) {
                $id_cliente = $value['id_cliente'];
                $nom_cliente = $value['nom_cliente'];
                $ape_cliente = $value['ape_cliente'];
              ?>
                <option value="<?php echo $id_cliente; ?>"><?php echo $nom_cliente . " " . $ape_cliente; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="col-md-4">
            <select name="mp" class="form-control" required>
              <option value="" selected disabled>Seleccionar medio de pago</option>
              <?php
              foreach ($mediopago as $key => $value) {
                $id_mediopago = $value['id_mediopago'];
                $nom_mediopago = $value['nom_mediopago'];
              ?>
                <option value="<?php echo $id_mediopago; ?>"><?php echo $nom_mediopago; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="col-md-4">
            <select name="tc" class="form-control" required>
              <option value="" selected disabled>Seleccionar tipo de comprobante</option>
              <?php
              foreach ($tipocomprobante as $key => $value) {
                $id_tipocomprobante = $value['id_tipocomprobante'];
                $nom_tipocomprobante = $value['nom_tipocomprobante'];
              ?>
                <option value="<?php echo $id_tipocomprobante; ?>"><?php echo $nom_tipocomprobante; ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <div class="col-md-12">
            <button type="submit" name="registrar" class="btn btn-primary" <?php echo $btn_dis; ?>>Registrar</button>
          </div>
        </div>
      </form>

      <hr>
    </div>
  </div>
</div>