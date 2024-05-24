<?php 
function ListarProductos()
{
	require("conexion.php");

	$sql="SELECT * FROM producto";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarProducto($nom,$prec,$prev,$desc)
{
	require("conexion.php");

	$sql="INSERT INTO producto() VALUES(NULL,'$nom','$prev','$prec','$desc')";
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

function EliminarProducto($id_producto)
{
	require("conexion.php");

	$sql="DELETE FROM producto WHERE id_producto='$id_producto'";
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

function ConsultarProducto($id_producto)
{
	require("conexion.php");

	$sql="SELECT * FROM producto WHERE id_producto='$id_producto'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarProducto($id_producto,$nom,$prec,$prev,$desc)
{
	require("conexion.php");

	$sql="UPDATE producto SET
	nom_producto = '$nom',
	prec_producto = '$prec',
	prev_producto = '$prev',
	desc_producto =  '$desc' 
	WHERE id_producto = '$id_producto'";
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

function ventaPorProducto() {
	require("conexion.php");

	$sql="SELECT nom_producto AS dat_producto, SUM(vd.cant_ventadetalle) AS cantidad 
	FROM ventadetalle vd
	INNER JOIN producto p ON vd.id_producto = p.id_producto 
	INNER JOIN venta v ON vd.id_venta = v.id_venta 
	WHERE v.est_venta = 1 GROUP BY vd.id_producto";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}
?>