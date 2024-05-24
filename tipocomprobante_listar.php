<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lista de Medios de Pago</title>
        <?php
         require("vista/estilos.php");
        ?>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function Eliminar(dato)
            {
                var id_tipocomprobante =  dato.value;

                Swal.fire({
                    title: "Seguro de eliminar el tipo de comprobante?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.post("tipocomprobante_eliminar.php", {id_tipocomprobante: id_tipocomprobante}, 
		                function(mensaje) {

                            Swal.fire({
                                title: "Eliminado!",
                                text: "El tipo de comprobante fue eliminado.",
                                icon: "success"
                            }).then((result) => {
                            if (result.isConfirmed) {
                                    location.reload();
                                }
                            });

                        }); 

                        
                    }
                });
            }
        </script>

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
                    require("modelo/m_tipocomprobante.php");
                    
                    //Si se presiona el boton editar
                    if(isset($_REQUEST['editar']))
                    {
                        $id_tipocomprobante = $_REQUEST['editar'];
                        ?>
                            <script type="text/javascript">
                                location.href="tipocomprobante_editar.php?id_tipocomprobante=<?php echo $id_tipocomprobante; ?>";
                            </script>
                        
                        <?php
                    }
                    //Si se presiona el boton eliminar
                    else if(isset($_REQUEST['eliminar']))
                    {
                        $id_tipocomprobante = $_REQUEST['eliminar'];
                        $rpta = EliminarTipocomprobante($id_tipocomprobante);
                        if($rpta=="SI")
                        {
                            ?>
                                <script type="text/javascript">
                                    alert("Eliminado correctamente!");
                                </script>
                            <?php
                        }

                    }    

                    $tipocomprobantes = ListarTipocomprobantes();
                    require("vista/v_tipocomprobante_listar.php");
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
