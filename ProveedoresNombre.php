
<?php

	// inclusion de otros programas

	include_once "visitaProveedores.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

		$Nombre_Proveedor = $_POST['Nombre_Proveedor'];

	$sql = "SELECT * from proveedor where Nombre_Proveedor ='" . $Nombre_Proveedor . "';";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDProveedor = array();
	$Nombre_Proveedor = array();
	$Ubicacion = array();
	$TelefonoP = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDProveedor[$pos_row] = $row['IDProveedor'];
			$Nombre_Proveedor[$pos_row] = $row['Nombre_Proveedor'];
			$Ubicacion[$pos_row] = $row['Ubicacion'];
			$TelefonoP[$pos_row] = $row['TelefonoP'];

			$pos_row = $pos_row + 1;
		}

		presentaProveedor($num_rows, $IDProveedor, $Nombre_Proveedor, $Ubicacion, $TelefonoP);
	}
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


