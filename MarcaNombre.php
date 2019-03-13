
<?php

	// inclusion de otros programas

	include_once "visitaMarca.php";

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$sql = $_POST['consulta']; 

	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

	$Nombre_Marca = $_POST['Nombre_Marca'];

	$sql = "select * from marca where Nombre_Marca ='" . $Nombre_Marca . "';";

	$result = $link->query($sql);


	// generacion de json de respuesta a partir de la consulta

	$num_rows = $result->num_rows;	
	$pos_row = 0;
	$IDMarca = array();
	$Precio = array();
	$Descripcion = array();

	if ($result) {

		while($row = $result->fetch_array(MYSQLI_BOTH)){
	//	foreach ($result as $row) {
	
			$IDMarca[$pos_row] = $row['IDMarca'];
			$Nombre_Marca[$pos_row] = $row['Nombre_Marca'];
			$Categoria[$pos_row] = $row['Categoria'];
			$Proveedor_IDProveedor[$pos_row] = $row['Proveedor_IDProveedor'];

			$pos_row = $pos_row + 1;
		}

		presentaMarca($num_rows, $IDMarca, $Nombre_Marca, $Categoria, $Proveedor_IDProveedor);
	}
	else {
		echo"Error en la query";
		echo $link->error;
	}

	// presentacion de resultados

	


	// cierre de la base de datos

	$link->close();

?>


