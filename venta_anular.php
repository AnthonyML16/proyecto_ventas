<?php 
$id_venta = $_POST['id_venta'];

require("modelo/m_venta.php");
$rpta = AnularVenta($id_venta);
echo $rpta;
?>