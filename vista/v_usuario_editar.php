<div class="container-fluid px-4">
  <h1 class="mt-4">USUARIOS</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Usuarios</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      Editar usuario
    </div>
    <div class="card-body">
      <form action="usuario_editar.php" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          <div class="col-md-6">
            <input type="text" name="nom" value="<?php echo $nom_usuario; ?>" class="form-control" placeholder="Nombres" aria-label="Nombres" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="ape" value="<?php echo $ape_usuario; ?>" class="form-control" placeholder="Apellidos" aria-label="Apellidos" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="dni" value="<?php echo $dni_usuario; ?>" class="form-control" placeholder="DNI" aria-label="DNI" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="cel" value="<?php echo $cel_usuario; ?>" class="form-control" placeholder="Celular" aria-label="Celular" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="email" value="<?php echo $email_usuario; ?>" class="form-control" placeholder="Email" aria-label="Email" required="required">
          </div>

          <div class="col-md-6">
            <input type="text" name="dir" value="<?php echo $dir_usuario; ?>" class="form-control" placeholder="Dirección" aria-label="Dirección" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="usu" value="<?php echo $user_usuario; ?>" class="form-control" placeholder="Usuario" aria-label="Usuario" required="required">
          </div>

          <div class="col-md-3">
            <input type="text" name="pass" value="<?php echo $pass_usuario; ?>" class="form-control" placeholder="Password" aria-label="Password" required="required">
          </div>

          <div class="col-md-3">
            <select name="est" class="form-control">
              <option value="1" <?php echo $e1; ?>>Activo</option>
              <option value="0" <?php echo $e0; ?>>Inactivo</option>
            </select>
          </div>

          <div class="col-md-1">
            Foto:
          </div>

          <div class="col-md-1">
            <img src="<?php echo $foto_usuario; ?>" style="width: 100%; height: 38px; object-fit: contain;">
            <input type="hidden" name="foto_actual" value="<?php echo $foto_usuario; ?>">
          </div>

          <div class="col-md-7">
            <input type="file" name="foto" accept="image/*" class="form-control" placeholder="Foto" aria-label="Foto">
          </div>

          <div class="col-md-12">
            <button type="submit" name="actualizar" value="<?php echo $id_usuario; ?>" class="btn btn-primary">Actualizar</button>
          </div>

        </div>

      </form>




    </div>
  </div>
</div>