<?php
require("modelo/m_venta.php");

$ventas = VentaPorProducto();

$data[] = array('Nombre', 'Cantidad');

foreach ($ventas as $key => $value) {
    $dato_usuario = $value['dato_usuario'];
    $cantidad = $value['cantidad'];

    $data[] = array($dato_usuario, (int)$cantidad);
}

echo json_encode($data);
?>