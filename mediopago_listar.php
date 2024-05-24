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
                var id_mediopago =  dato.value;

                Swal.fire({
                    title: "Seguro de eliminar el medio de pago?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.post("mediopago_eliminar.php", {id_mediopago: id_mediopago}, 
		                function(mensaje) {

                            Swal.fire({
                                title: "Eliminado!",
                                text: "El medio de pago fue eliminado.",
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
                    require("modelo/m_mediopago.php");
                    
                    //Si se presiona el boton editar
                    if(isset($_REQUEST['editar']))
                    {
                        $id_mediopago = $_REQUEST['editar'];
                        ?>
                            <script type="text/javascript">
                                location.href="mediopago_editar.php?id_mediopago=<?php echo $id_mediopago; ?>";
                            </script>
                        
                        <?php
                    }
                    //Si se presiona el boton eliminar
                    else if(isset($_REQUEST['eliminar']))
                    {
                        $id_mediopago = $_REQUEST['eliminar'];
                        $rpta = EliminarMediopago($id_mediopago);
                        if($rpta=="SI")
                        {
                            ?>
                                <script type="text/javascript">
                                    alert("Eliminado correctamente!");
                                </script>
                            <?php
                        }

                    }    

                    $mediopagos = ListarMediopagos();
                    require("vista/v_mediopago_listar.php");
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
