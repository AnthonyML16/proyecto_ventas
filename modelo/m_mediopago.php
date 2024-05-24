<?php 
function ListarMediopagos()
{
	require("conexion.php");

	$sql="SELECT * FROM mediopago";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarMediopago($nom)
{
	require("conexion.php");

	$sql="INSERT INTO mediopago() VALUES(NULL,'$nom')";
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

function EliminarMediopago($id_mediopago)
{
	require("conexion.php");

	$sql="DELETE FROM mediopago WHERE id_mediopago='$id_mediopago'";
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

function ConsultarMediopago($id_mediopago)
{
	require("conexion.php");

	$sql="SELECT * FROM mediopago WHERE id_mediopago='$id_mediopago'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarMediopago($id_mediopago,$nom)
{
	require("conexion.php");

	$sql="UPDATE mediopago SET
	nom_mediopago = '$nom'
	WHERE id_mediopago = '$id_mediopago'";
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