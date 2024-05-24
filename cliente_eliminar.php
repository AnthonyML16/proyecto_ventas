<?php 
$id_cliente = $_POST['id_cliente'];

require("modelo/m_cliente.php");
$rpta = EliminarCliente($id_cliente);
echo $rpta;
?>