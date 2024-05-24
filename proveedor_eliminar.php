<?php 
$id_proveedor = $_POST['id_proveedor'];

require("modelo/m_proveedor.php");
$rpta = EliminarProveedor($id_proveedor);
echo $rpta;
?>