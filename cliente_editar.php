<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edición de Cliente</title>
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
                    require("modelo/m_cliente.php");

                    //Si se presiona el boton actualizar
                    if(isset($_REQUEST['actualizar']))
                    {
                        $id_cliente = $_REQUEST['actualizar'];
                        $nom = $_REQUEST['nom'];
                        $ape = $_REQUEST['ape'];
                        $dni = $_REQUEST['dni'];
                        $cel = $_REQUEST['cel'];
                        $email = $_REQUEST['email'];
                        $dir = $_REQUEST['dir'];

                        $rpta = ActualizarCliente($id_cliente,$nom,$ape,$dni,$cel,$email,$dir);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href="cliente_listar.php";
                            </script>
                            <?php
                        }

                    }

                    $id_cliente =  $_REQUEST['id_cliente'];

                    $cliente = ConsultarCliente($id_cliente);
                    foreach ($cliente as $key => $value) 
                    {
                        $nom_cliente = $value['nom_cliente'];
                        $ape_cliente = $value['ape_cliente'];
                        $dni_cliente = $value['dni_cliente'];
                        $cel_cliente = $value['cel_cliente'];
                        $email_cliente = $value['email_cliente'];
                        $dir_cliente = $value['dir_cliente'];
                    }

                    require("vista/v_cliente_editar.php");
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
