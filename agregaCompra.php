<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Insercion de compras</title>
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

	$IDCompra = $_POST['IDCompra'];
	$Total_Vendido = $_POST['Total_Vendido'];
	$Cliente_IDCliente = $_POST['Cliente_IDCliente'];
	$Fehcha_Entrega = $_POST['Fehcha_Entrega'];


	// inicio de variables en caso de que los parametros no tengan valores

	$result = false;

	// evaluacion llegada de parametros y operacion de insercion

	$sql = "insert into compra(IDCompra,Total_Vendido,Cliente_IDCliente,Fehcha_Entrega) values ('" . $IDCompra . "', '" . $Total_Vendido . "', '" . $Cliente_IDCliente . "', '". $Fehcha_Entrega ."');"; 


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


