<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Agenda de pedidos</title>
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

function presentaPedidos($num_rows, $IDCliente, $Nombre_Cliente, $Descripcion, $Precio, $Cantidad, $Fehcha_Entrega) {

	echo "<h1>Pedidos</h1>";
	echo "$num_rows Pedidos\n";
	echo "<br />";
	echo "<br />";

	echo	"<thead> <th>IDCliente</th> <th>Cliente</th>  <th>Descripcion</th> <th>Precio</th> <th>Cantidad</th> <th>Fecha de entrega</th> </thead> <tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){

		echo "<tr>";
		echo "<td>". $IDCliente[$pos_row] . "</td>";
		echo "<td>". $Nombre_Cliente[$pos_row] . "</td>";
		echo "<td>". $Descripcion[$pos_row] . "</td>";
		echo "<td>". $Precio[$pos_row] . "</td>";
		echo "<td>". $Cantidad[$pos_row] . "</td>";
		echo "<td>". $Fehcha_Entrega[$pos_row] . "</td>";
		
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

