
<?php

	// inclusion de otros programas

	include_once "visitaCompra.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		//curso = "AD4000";

		$sql = "SELECT * FROM compra, cliente where Cliente_IDCliente = IDCliente";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDCompra = array();
	$Total_Vendido = array();
	$Cliente_IDCliente = array();
	$Nombre_Cliente = array();
	$Fehcha_Entrega = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDCompra[$pos_row] = $row['IDCompra'];
			$Total_Vendido[$pos_row] = $row['Total_Vendido'];
			$Cliente_IDCliente[$pos_row] = $row['Cliente_IDCliente'];
			$Nombre_Cliente[$pos_row] = $row['Nombre_Cliente'];
			$Fehcha_Entrega[$pos_row] = $row['Fehcha_Entrega'];
	
			$pos_row = $pos_row + 1;
		}

		presentaCompra($num_rows, $IDCompra, $Total_Vendido, $Cliente_IDCliente, $Nombre_Cliente, $Fehcha_Entrega);
	}
	
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


