<?php 
function ListarProveedors()
{
	require("conexion.php");

	$sql="SELECT * FROM proveedor";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarProveedor($nom,$ruc,$cel,$email,$dir)
{
	require("conexion.php");

	$sql="INSERT INTO proveedor() VALUES(NULL,'$nom','$ruc','$cel','$email','$dir')";
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

function EliminarProveedor($id_proveedor)
{
	require("conexion.php");

	$sql="DELETE FROM proveedor WHERE id_proveedor='$id_proveedor'";
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

function ConsultarProveedor($id_proveedor)
{
	require("conexion.php");

	$sql="SELECT * FROM proveedor WHERE id_proveedor='$id_proveedor'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarProveedor($id_proveedor,$nom,$dni,$cel,$email,$dir)
{
	require("conexion.php");

	$sql="UPDATE proveedor SET
	nom_proveedor = '$nom',
	ruc_proveedor = '$dni',
	cel_proveedor = '$cel',
	email_proveedor = '$email',
	dir_proveedor =  '$dir' 
	WHERE id_proveedor = '$id_proveedor'";
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