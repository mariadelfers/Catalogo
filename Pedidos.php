	
<?php

	// inclusion de otros programas

	include_once "visitaPedidos.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		//$IDCliente = $_POST['IDCliente'];

		$sql = "Select c.IDCliente, c.Nombre_Cliente, p.Descripcion, p.Precio, o.Cantidad, r.Fehcha_Entrega
From producto p INNER JOIN (orden o INNER JOIN (compra r INNER JOIN cliente c ON r.Cliente_IDCliente = c.IDCliente) ON o.Compra_IDCompra = r.IDCompra) ON p.IDProducto = o.Producto_IDProducto
where r.Cliente_IDCliente = IDCliente";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDCliente = array();
	$Nombre_Cliente = array();
	$Descripcion = array();
	$Precio = array();
	$Cantidad = array();
	$Fehcha_Entrega = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDCliente[$pos_row] = $row['IDCliente'];
			$Nombre_Cliente[$pos_row] = $row['Nombre_Cliente'];
			$Descripcion[$pos_row] = $row['Descripcion'];
			$Precio[$pos_row] = $row['Precio'];
			$Cantidad[$pos_row] = $row['Cantidad'];
			$Fehcha_Entrega[$pos_row] = $row['Fehcha_Entrega'];

			$pos_row = $pos_row + 1;
		}

		presentaPedidos($num_rows, $IDCliente, $Nombre_Cliente, $Descripcion, $Precio, $Cantidad, $Fehcha_Entrega);
	}
	
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


