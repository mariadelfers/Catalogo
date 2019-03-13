<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Agenda de compras</title>
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

function presentaCompra($num_rows, $IDCompra, $Total_Vendido, $Cliente_IDCliente, $Nombre_Cliente, $Fecha_Entrega) {

	echo "<h1>Compras</h1>";
	echo "$num_rows Compras\n";
	echo "<br />";
	echo "<br />";

	echo	"<thead> <th>IDCompra</th> <th>Cliente</th> <th>Nombre</th> <th>Total</th> <th>Fecha de entrega</th> </thead> <tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){

		echo "<tr>";
		echo "<td>". $IDCompra[$pos_row] . "</td>";
		echo "<td>". $Cliente_IDCliente[$pos_row] . "</td>";
		echo "<td>". $Nombre_Cliente[$pos_row] . "</td>";
		echo "<td>". $Total_Vendido[$pos_row] . "</td>";
		echo "<td>". $Fecha_Entrega[$pos_row] . "</td>";
		
		echo "</tr>";

		$pos_row = $pos_row + 1;
	}

	echo "	</tbody> </table>";
	
	echo "<br />";
	echo "<br />";

}

?>

</div>
 		<form action="Menu.html" method="POST">
            <input type="submit" value="Menu">
        </form>

</body>

</html>

