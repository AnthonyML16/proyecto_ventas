  <div class="container-fluid px-4">
      <h1 class="mt-4">USUARIOS</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Usuarios</li>
      </ol>

      <div class="card mb-4">
          <div class="card-header">
              Lista de usuarios
          </div>
          <div class="card-body">
              <form action="usuario_listar.php" method="post">
                  <table id="datatablesSimple">
                      <thead>
                          <tr>
                              <th></th>
                              <th>Foto</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>DNI</th>
                              <th>Celular</th>
                              <th>Email</th>
                              <th>Dirección</th>
                              <th>User</th>
                              <th>Password</th>
                              <th>Estado</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th></th>
                              <th>Foto</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>DNI</th>
                              <th>Celular</th>
                              <th>Email</th>
                              <th>Dirección</th>
                              <th>User</th>
                              <th>Password</th>
                              <th>Estado</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </tfoot>
                      <tbody>
                          <?php
                            $n = 0;
                            foreach ($usuarios as $key => $value) {
                                $n++;
                                $id_usuario = $value['id_usuario'];
                                $nom_usuario = $value['nom_usuario'];
                                $ape_usuario = $value['ape_usuario'];
                                $dni_usuario = $value['dni_usuario'];
                                $cel_usuario = $value['cel_usuario'];
                                $email_usuario = $value['email_usuario'];
                                $dir_usuario = $value['dir_usuario'];
                                $user_usuario = $value['user_usuario'];
                                $pass_usuario = $value['pass_usuario'];
                                $est_usuario = $value['est_usuario'];
                                if ($est_usuario == 1) {
                                    $estado = "Activo";
                                } else {
                                    $estado = "Inactivo";
                                }

                                $foto_usuario = $value['foto_usuario'];
                            ?>
                              <tr>
                                  <td><?php echo $n; ?></td>
                                  <td><img src="<?php echo $foto_usuario; ?>" class="img-fluid w-50"></td>
                                  <td><?php echo $nom_usuario; ?></td>
                                  <td><?php echo $ape_usuario; ?></td>
                                  <td><?php echo $dni_usuario; ?></td>
                                  <td><?php echo $cel_usuario; ?></td>
                                  <td><?php echo $email_usuario; ?></td>
                                  <td><?php echo $dir_usuario; ?></td>
                                  <td><?php echo $user_usuario; ?></td>
                                  <td><?php echo $pass_usuario; ?></td>
                                  <td><?php echo $estado; ?></td>
                                  <td>
                                      <button name="editar" type="submit" value="<?php echo $id_usuario; ?>" class="btn btn-sm btn-primary">Editar</button>
                                  </td>
                                  <td>
                                      <button name="eliminar" type="submit" value="<?php echo $id_usuario; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro de eliminar?');">Eliminar</button>
                                      <input type="hidden" name="foto_actual" value="<?php echo $foto_usuario; ?>">
                                  </td>
                              </tr>
                          <?php
                            }
                            ?>
                      </tbody>
                  </table>
              </form>
          </div>
      </div>
  </div>