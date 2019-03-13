<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Insercion de clientes</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>

	<div class="container">
	       
	  <table class="table table-striped">


<?php

	// conexion a la base de datos

	$link = mysqli_connect("localhost", "root", "", "catalogo");

	// variables de la consulta

	//$IDCliente = $_POST['IDCliente'];
	$Nombre_Cliente = $_POST['Nombre_Cliente'];
	$Telefono = $_POST['Telefono'];
	$Direccion = $_POST['Direccion'];


	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

	$sql = "insert into cliente(Nombre_Cliente,Telefono,Direccion) values ('" . $Nombre_Cliente . "', '" . $Telefono . "', '" . $Direccion . "');"; 


	$result = $link->query($sql);


	// generacion de respuesta a partir de la insercion


	echo "<h1>Resultado de la insercion</h1>";

	echo "<br />";
	echo "<br />";

	echo	"<thead> <th>Resultado</th>  </thead> <tbody>";

	if ($result) {

		echo "<tr>";
		echo "<td>". "Exitoso" . "</td>";
		echo "</tr>";
		

	}
	else {
		echo "<tr>";
		echo "<td>". "Error en la insercion" . "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>". "Mensaje: " . $link->error . "</td>";
		echo "</tr>";
	}


	echo "	</tbody> </table>";
	
	echo "<br />";
	echo "<br />";



	// cierre de la base de datos

	$link->close();

?>

</div>

</body>

</html>


