<?php 
$id_mediopago = $_POST['id_mediopago'];

require("modelo/m_mediopago.php");
$rpta = EliminarMediopago($id_mediopago);
echo $rpta;
?>