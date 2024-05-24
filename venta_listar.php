<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lista de Ventas</title>
        <?php
         require("vista/estilos.php");
        ?>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function Anular(dato)
            {
                var id_venta =  dato.value;

                Swal.fire({
                    title: "Seguro de anular la venta?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, anular!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.post("venta_anular.php", {id_venta: id_venta}, 
		                function(mensaje) {

                            Swal.fire({
                                title: "Anulada!",
                                text: "La venta fue anulada.",
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
                    require("modelo/m_venta.php");

                    $ventas = ListarVentas();
                    require("vista/v_venta_listar.php");
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
