<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Ventas</title>
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
                    require("modelo/m_venta.php");
                    require("modelo/m_producto.php");
                    require("modelo/m_cliente.php");
                    require("modelo/m_mediopago.php");
                    require("modelo/m_tipocomprobante.php");

                    $producto = ListarProductos();
                    $cliente = ListarClientes();
                    $mediopago = ListarMediopagos();
                    $tipocomprobante = ListarTipocomprobantes();

                    if(isset($_REQUEST['agregar']))
                    {
                        $id_producto = $_REQUEST['pro'];
                        $cant = $_REQUEST['cant'];

                        $datos = ConsultarProducto($id_producto);
                        foreach ($datos as $key => $value) {
                          $prev_producto =  $value['prev_producto'];
                          $nom_producto =  $value['nom_producto'];
                        }

                        $total = $cant * $prev_producto;

                        agregarAlCarrito($id_producto,$nom_producto,$prev_producto,$cant,$total);

                    }    
                    else if(isset($_REQUEST['eliminar']))
                    {
                        $id_producto = $_REQUEST['eliminar'];  
                        eliminarDelCarrito($id_producto);
                    }    
                    else if(isset($_REQUEST['registrar']))
                    {
                        $id_cliente = $_REQUEST['cli'];
                        $id_mp = $_REQUEST['mp'];
                        $id_tc = $_REQUEST['tc'];
                        $id_usuario = $_SESSION['id_session'];

                        $id_venta = RegistrarVenta($id_usuario,$id_cliente,$id_mp,$id_tc);

                        if($id_venta!="NO")
                        {

                            if (isset($_SESSION['carrito'])) 
                            {   
                                foreach ($_SESSION['carrito'] as $producto) 
                                {  
                                    $id = $producto['id'];
                                    $nombre = $producto['nombre'];
                                    $precio = $producto['precio'];
                                    $cantidad = $producto['cantidad'];
                                    $total = $producto['total'];

                                    RegistrarVentadetalle($id_venta,$id,$precio,$cantidad,$total);
                                }
                            }

                            ?>
                            <script type="text/javascript">
                                location.href="venta_listar.php";
                            </script>
                            <?php
                        }


                        vaciarCarrito();

                    }

                    require("vista/v_venta_registrar.php");
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
