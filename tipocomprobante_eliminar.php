<?php 
$id_tipocomprobante = $_POST['id_tipocomprobante'];

require("modelo/m_tipocomprobante.php");
$rpta = EliminarTipocomprobante($id_tipocomprobante);
echo $rpta;
?>