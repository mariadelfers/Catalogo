<?php

	// inclusion de otros programas

	include_once "visitaOrden.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		//curso = "AD4000";

		$sql = "SELECT * FROM orden";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDOrden = array();
	$Cantidad = array();
	$Compra_IDCompra = array();
	$Compra_Cliente_IDCliente = array();
	$Producto_IDProducto = array();
	$Producto_Marca_IDMarca = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDOrden[$pos_row] = $row['IDOrden'];
			$Cantidad[$pos_row] = $row['Cantidad'];
			$Compra_IDCompra[$pos_row] = $row['Compra_IDCompra'];
			$Compra_Cliente_IDCliente[$pos_row] = $row['Compra_Cliente_IDCliente'];
			$Producto_IDProducto[$pos_row] = $row['Producto_IDProducto'];
			$Producto_Marca_IDMarca[$pos_row] = $row['Producto_IDProducto'];
	
			$pos_row = $pos_row + 1;
		}

		presentaOrden($num_rows, $IDOrden, $Cantidad, $Compra_IDCompra, $Compra_Cliente_IDCliente, $Producto_IDProducto, $Producto_Marca_IDMarca);
	}
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>