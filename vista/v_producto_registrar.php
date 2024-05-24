<div class="container-fluid px-4">
  <h1 class="mt-4">PRODUCTOS</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Productos</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Registrar nuevo producto
    </div>
    <div class="card-body">
      <form action="producto_registrar.php" method="post">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="nom" class="form-control" placeholder="Nombre de producto" aria-label="Nombre de producto" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="prec" class="form-control" placeholder="Precio de compra" aria-label="Precio de compra" min="0" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="prev" class="form-control" placeholder="Precio de venta" aria-label="Precio de venta" min="0" required="required">
          </div>

          <div class="col-md-12">
            <input type="text" name="desc" class="form-control" placeholder="Descripción de producto" aria-label="Descripción de producto" required="required">
          </div>

          <div class="col-md-12">
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>