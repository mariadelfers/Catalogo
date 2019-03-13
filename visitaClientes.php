<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Agenda de clientes</title>
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

function presentaCliente($num_rows, $IDCliente, $Nombre_Cliente) {

	echo "<h1>Clientes</h1>";
	echo "$num_rows Clientes\n";
	echo "<br />";
	echo "<br />";

	echo	"<thead> <th>Clave</th> <th>Nombre</th> </thead> <tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){

		echo "<tr>";
		echo "<td>". $IDCliente[$pos_row] . "</td>";
		echo "<td>". $Nombre_Cliente[$pos_row] . "</td>";
		
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

