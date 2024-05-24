<div class="container-fluid px-4">
  <h1 class="mt-4">CLIENTES</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Clientes</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Registrar nuevo cliente
    </div>
    <div class="card-body">
      <form action="cliente_registrar.php" method="post">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="nom" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="ape" class="form-control" placeholder="Apellidos" aria-label="Apellidos" required="required">
          </div>

          <div class="col-md-3">
            <input type="number" name="dni" class="form-control" placeholder="DNI" aria-label="DNI" min="10000000" max="99999999" required="required">
          </div>

          <div class="col-md-3">
            <input type="number" name="cel" class="form-control" placeholder="Celular" aria-label="Celular" min="100000000" max="999999999" required="required">
          </div>

          <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" required="required">
          </div>

          <div class="col-md-12">
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