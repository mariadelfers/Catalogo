
<?php

	// inclusion de otros programas

	include_once "visitaProducto.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		//curso = "AD4000";

		$sql = "select * from producto";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDProducto = array();
	$Precio = array();
	$Descripcion = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDProducto[$pos_row] = $row['IDProducto'];
			$Precio[$pos_row] = $row['Precio'];
			$Descripcion[$pos_row] = $row['Descripcion'];
	
			$pos_row = $pos_row + 1;
		}

		presentaProducto($num_rows, $IDProducto, $Precio, $Descripcion);
	}
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


