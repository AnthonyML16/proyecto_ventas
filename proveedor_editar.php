<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edición de Proveedor</title>
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
                    require("modelo/m_proveedor.php");

                    //Si se presiona el boton actualizar
                    if(isset($_REQUEST['actualizar']))
                    {
                        $id_proveedor = $_REQUEST['actualizar'];
                        $nom = $_REQUEST['nom'];
                        $ruc = $_REQUEST['ruc'];
                        $cel = $_REQUEST['cel'];
                        $email = $_REQUEST['email'];
                        $dir = $_REQUEST['dir'];

                        $rpta = ActualizarProveedor($id_proveedor,$nom,$ruc,$cel,$email,$dir);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href="proveedor_listar.php";
                            </script>
                            <?php
                        }

                    }

                    $id_proveedor =  $_REQUEST['id_proveedor'];

                    $proveedor = ConsultarProveedor($id_proveedor);
                    foreach ($proveedor as $key => $value) 
                    {
                        $nom_proveedor = $value['nom_proveedor'];
                        $ruc_proveedor = $value['ruc_proveedor'];
                        $cel_proveedor = $value['cel_proveedor'];
                        $email_proveedor = $value['email_proveedor'];
                        $dir_proveedor = $value['dir_proveedor'];
                    }

                    require("vista/v_proveedor_editar.php");
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
