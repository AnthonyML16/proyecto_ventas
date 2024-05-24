<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Usuario</title>
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

                    if(isset($_REQUEST['registrar']))
                    {
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

                        if($ruta_foto!=NULL) //cuando si hay una foto adjunta
                        {   
                            $ruta_destino  = "foto/usuario/".$nom_foto; //donde se guardará la foto
                            copy($ruta_foto,$ruta_destino);
                        }
                        else
                        {
                            $ruta_destino = "foto/usuario/sinfoto.png";
                        }

                        $rpta = RegistrarUsuario($nom,$ape,$dni,$cel,$email,$dir,$usu,$pass,$est,$ruta_destino);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                location.href="usuario_listar.php";
                            </script>
                            <?php
                        }

                    }

                    require("vista/v_usuario_registrar.php");
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
