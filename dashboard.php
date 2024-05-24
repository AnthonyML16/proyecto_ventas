<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <?php
    require("vista/estilos.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body class="sb-nav-fixed">
    <?php require("vista/menuh.php"); ?>

    <div id="layoutSidenav">
        <?php require("vista/menuv.php"); ?>

        <div id="layoutSidenav_content">
            <main>
                <?php

                require("vista/v_dashboard.php");
                ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <?php require("vista/footer.php"); ?>
            </footer>
        </div>
    </div>
    <?php require("vista/scripts.php"); ?>
</body>

</html>