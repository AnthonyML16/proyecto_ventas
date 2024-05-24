<?php
require("modelo/m_venta.php");

$ventas = VentasPorCliente();

$data[] = array('Nombre', 'Cantidad');

foreach ($ventas as $key => $value) {
    $dato_cliente = $value['dato_cliente'];
    $cantidad = $value['cantidad'];

    $data[] = array($dato_cliente, (int)$cantidad);
}

echo json_encode($data);
?>