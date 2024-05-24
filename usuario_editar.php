<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edición de Usuario</title>
        <?php
         require("vista/estilos.php");
        ?>
    </head>
    <body class="sb-nav-fixed">
        
        <?php
         require("vista/menuh.php");
        ?>

        <div id="layoutSidenav">
          
            <?php
            require("vista/menuv.php");
            ?>

            <div id="layoutSidenav_content">
                <main>
                    <?php 
                    require("modelo/m_usuario.php");

                    //Si se presiona el boton actualizar
                    if(isset($_REQUEST['actualizar']))
                    {
                        $id_usuario = $_REQUEST['actualizar'];
                        $nom = $_REQUEST['nom'];
                        $ape = $_REQUEST['ape'];
                        $dni = $_REQUEST['dni'];
                        $cel = $_REQUEST['cel'];
                        $email = $_REQUEST['email'];
                        $dir = $_REQUEST['dir'];
                        $usu = $_REQUEST['usu'];
                        $pass = $_REQUEST['pass'];
                        $est = $_REQUEST['est'];

                        //Para la foto
                        $nom_foto =  $_FILES['foto']['name']; //nombre de la foto
                        $ruta_foto = $_FILES['foto']['tmp_name']; //ruta de la foto

                        $foto_actual =  $_REQUEST['foto_actual'];

                        if($ruta_foto!=NULL) //cuando si hay una foto adjunta
                        {   
                            $ruta_destino  = "foto/usuario/".$nom_foto; //donde se guardará la foto
                            copy($ruta_foto,$ruta_destino);
                        }
                        else
                        {
                            $ruta_destino = $foto_actual;
                        }

                        $rpta = ActualizarUsuario($id_usuario,$nom,$ape,$dni,$cel,$email,$dir,$usu,$pass,$est,$ruta_destino);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href="usuario_listar.php";
                            </script>
                            <?php
                        }

                    }

                    $id_usuario =  $_REQUEST['id_usuario'];

                    $usuario = ConsultarUsuario($id_usuario);
                    foreach ($usuario as $key => $value) 
                    {
                        $nom_usuario = $value['nom_usuario'];
                        $ape_usuario = $value['ape_usuario'];
                        $dni_usuario = $value['dni_usuario'];
                        $cel_usuario = $value['cel_usuario'];
                        $email_usuario = $value['email_usuario'];
                        $dir_usuario = $value['dir_usuario'];
                        $user_usuario = $value['user_usuario'];
                        $pass_usuario = $value['pass_usuario'];
                        $est_usuario = $value['est_usuario'];
                        if($est_usuario==1){$e1="selected";}else{$e1="";}
                        if($est_usuario==0){$e0="selected";}else{$e0="";}
                        $foto_usuario = $value['foto_usuario'];
                    }

                    require("vista/v_usuario_editar.php");
                    ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <?php
                    require("vista/footer.php");
                    ?>   
                </footer>
            </div>
        </div>
        <?php
        require("vista/scripts.php");
        ?>  
    </body>
</html>
