<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Cliente</title>
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

                    if(isset($_REQUEST['registrar']))
                    {
                        $nom = $_REQUEST['nom'];
                        $ape = $_REQUEST['ape'];
                        $dni = $_REQUEST['dni'];
                        $cel = $_REQUEST['cel'];
                        $email = $_REQUEST['email'];
                        $dir = $_REQUEST['dir'];

                        $rpta = RegistrarCliente($nom,$ape,$dni,$cel,$email,$dir);

                        if($rpta=="SI")
                        {
                            ?>
                            <script type="text/javascript">
                                location.href="cliente_listar.php";
                            </script>
                            <?php
                        }

                    }

                    require("vista/v_cliente_registrar.php");
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
