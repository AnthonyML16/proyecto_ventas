<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(ventaPorCliente);
    google.charts.setOnLoadCallback(ventaPorProducto);
    google.charts.setOnLoadCallback(ventaPorUsuario);

    function ventaPorCliente() {
        var jsonData = $.ajax({
            url: "dashboard_cliente.php",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.arrayToDataTable(JSON.parse(jsonData));

        var options = {
            'title': 'Ventas por cliente',
        };

        var chart = new google.visualization.PieChart(document.getElementById('ventaCliente'));
        chart.draw(data, options);
    }

    function ventaPorProducto() {
        var jsonData = $.ajax({
            url: "dashboard_producto.php",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.arrayToDataTable(JSON.parse(jsonData));

        var options = {
            'title': 'Ventas por producto',
            legend: {
                position: 'bottom',
                maxLines: 3
            },
            bar: {
                groupWidth: '75%'
            },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('ventaProducto'));
        chart.draw(data, options);
    }

    function ventaPorUsuario() {
        var jsonData = $.ajax({
            url: "dashboard_usuario.php",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.arrayToDataTable(JSON.parse(jsonData));

        var options = {
            'title': 'Ventas por usuario',
            legend: {
                position: 'top',
                maxLines: 3
            },
        };

        var chart = new google.visualization.BarChart(document.getElementById('ventaUsuario'));
        chart.draw(data, options);
    }
</script>

<div class="container-fluid px-4">
    <h1 class="mt-4">DASHBOARD</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row align-items-centes">
        <div class="col">
            <div id="ventaCliente"></div>
        </div>
        <div class="col">
            <div id="ventaProducto"></div>
        </div>
        <div class="col">
            <div id="ventaUsuario"></div>
        </div>
    </div>
</div>