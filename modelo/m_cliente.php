<?php 
function ListarClientes()
{
	require("conexion.php");

	$sql="SELECT * FROM cliente";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarCliente($nom,$ape,$dni,$cel,$email,$dir)
{
	require("conexion.php");

	$sql="INSERT INTO cliente() VALUES(NULL,'$nom','$ape','$dni','$cel','$email','$dir')";
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

function EliminarCliente($id_cliente)
{
	require("conexion.php");

	$sql="DELETE FROM cliente WHERE id_cliente='$id_cliente'";
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

function ConsultarCliente($id_cliente)
{
	require("conexion.php");

	$sql="SELECT * FROM cliente WHERE id_cliente='$id_cliente'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarCliente($id_cliente,$nom,$ape,$dni,$cel,$email,$dir)
{
	require("conexion.php");

	$sql="UPDATE cliente SET
	nom_cliente = '$nom',
	ape_cliente = '$ape',
	dni_cliente = '$dni',
	cel_cliente = '$cel',
	email_cliente = '$email',
	dir_cliente =  '$dir' 
	WHERE id_cliente = '$id_cliente'";
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