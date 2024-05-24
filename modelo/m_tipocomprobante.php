<?php 
function ListarTipocomprobantes()
{
	require("conexion.php");

	$sql="SELECT * FROM tipocomprobante";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarTipocomprobante($nom)
{
	require("conexion.php");

	$sql="INSERT INTO tipocomprobante() VALUES(NULL,'$nom')";
	$res = mysqli_query($con,$sql);

	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);
}

function EliminarTipocomprobante($id_tipocomprobante)
{
	require("conexion.php");

	$sql="DELETE FROM tipocomprobante WHERE id_tipocomprobante='$id_tipocomprobante'";
	$res = mysqli_query($con,$sql);
	
	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);

}

function ConsultarTipocomprobante($id_tipocomprobante)
{
	require("conexion.php");

	$sql="SELECT * FROM tipocomprobante WHERE id_tipocomprobante='$id_tipocomprobante'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarTipocomprobante($id_tipocomprobante,$nom)
{
	require("conexion.php");

	$sql="UPDATE tipocomprobante SET
	nom_tipocomprobante = '$nom'
	WHERE id_tipocomprobante = '$id_tipocomprobante'";
	$res = mysqli_query($con,$sql);
	
	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);
}
?>