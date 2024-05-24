<?php 
$id_producto = $_POST['id_producto'];

require("modelo/m_producto.php");
$rpta = EliminarProducto($id_producto);
echo $rpta;
?>