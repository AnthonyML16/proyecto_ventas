<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lista de Clientes</title>
    <?php
    require("vista/estilos.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function Eliminar(dato) {
            var id_cliente = dato.value;

            Swal.fire({
                title: "Seguro de eliminar el cliente?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {

                    $.post("cliente_eliminar.php", {
                            id_cliente: id_cliente
                        },
                        function(mensaje) {

                            Swal.fire({
                                title: "Eliminado!",
                                text: "El cliente fue eliminado.",
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
                require("modelo/m_cliente.php");

                if (isset($_REQUEST['editar'])) {
                    $id_cliente = $_REQUEST['editar'];
                ?>
                    <script type="text/javascript">
                        location.href = "cliente_editar.php?id_cliente=<?php echo $id_cliente; ?>";
                    </script>
                    <?php
                } else if (isset($_REQUEST['eliminar'])) {
                    $id_cliente = $_REQUEST['eliminar'];
                    $rpta = EliminarCliente($id_cliente);
                    if ($rpta == "SI") {
                    ?>
                        <script type="text/javascript">
                            alert("Eliminado correctamente!");
                        </script>
                <?php
                    }
                }

                $clientes = ListarClientes();
                require("vista/v_cliente_listar.php");
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