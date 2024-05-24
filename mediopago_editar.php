<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edición de Medio de Pago</title>
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
                    require("modelo/m_mediopago.php");

                    //Si se presiona el boton actualizar
                    if(isset($_REQUEST['actualizar']))
                    {
                        $id_mediopago = $_REQUEST['actualizar'];
                        $nom = $_REQUEST['nom'];

                        $rpta = ActualizarMediopago($id_mediopago,$nom);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href="mediopago_listar.php";
                            </script>
                            <?php
                        }

                    }

                    $id_mediopago =  $_REQUEST['id_mediopago'];

                    $mediopago = ConsultarMediopago($id_mediopago);
                    foreach ($mediopago as $key => $value) 
                    {
                        $nom_mediopago = $value['nom_mediopago'];
                    }

                    require("vista/v_mediopago_editar.php");
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
