<div class="container-fluid px-4">
  <h1 class="mt-4">PROVEEDORES</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Proveedores</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Registrar nuevo proveedor
    </div>

    <div class="card-body">
      <form action="proveedor_registrar.php" method="post">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="nom" class="form-control" placeholder="Nombre de proveedor" aria-label="Nombre de proveedor" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="ruc" class="form-control" placeholder="RUC" aria-label="RUC" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="cel" class="form-control" placeholder="Celular" aria-label="Celular" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="dir" class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
          </div>

          <div class="col-md-12">
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>