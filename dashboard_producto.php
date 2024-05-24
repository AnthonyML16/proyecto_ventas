<?php
require("modelo/m_producto.php");

$ventas = ventaPorProducto();

$data[] = array('Nombre', 'Cantidad');

foreach ($ventas as $key => $value) {
    $nom_producto = $value['dat_producto'];
    $cantidad = $value['cantidad'];

    $data[] = array($nom_producto, (int)$cantidad);
}

echo json_encode($data);
?>