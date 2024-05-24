<div class="container-fluid px-4">
  <h1 class="mt-4">USUARIOS</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Usuarios</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Registrar un nuevo usuario
    </div>
    <div class="card-body">
      <form action="usuario_registrar.php" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="nom" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="ape" class="form-control" placeholder="Apellidos" aria-label="Apellidos" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="dni" class="form-control" placeholder="DNI" aria-label="DNI" required="required">
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

          <div class="col-md-3">
            <input type="text" name="usu" class="form-control" placeholder="Usuario" aria-label="Usuario" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="pass" class="form-control" placeholder="Password" aria-label="Password" required="required">
          </div>

          <div class="col-md-3">
            <select name="est" class="form-control">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
          </div>

          <div class="col-md-9">
            <input type="file" name="foto" accept="image/*" class="form-control" placeholder="Foto" aria-label="Foto">
          </div>

          <div class="col-md-12">
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>