
<?php

	// inclusion de otros programas

	include_once "visitaClientes.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['mostrarClientes']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		//$cliente = $_POST['clave'];

		$sql = "select * from cliente";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDCliente = array();
	$Nombre_Cliente = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDCliente[$pos_row] = $row['IDCliente'];
			$Nombre_Cliente[$pos_row] = $row['Nombre_Cliente'];
	
			$pos_row = $pos_row + 1;
		}

		presentaCliente($num_rows, $IDCliente, $Nombre_Cliente);
	}
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


