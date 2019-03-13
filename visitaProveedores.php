<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Agenda de marcas</title>
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

function presentaProveedor($num_rows, $IDProveedor, $Nombre_Proveedor, $Ubicacion, $TelefonoP) {

	echo "<h1>Proveedor</h1>";
	echo "$num_rows Marcas\n";
	echo "<br />";
	echo "<br />";

	echo	"<thead><th>IDProveedor</th> <th>Nombre</th> <th>Ubicacion</th> <th>Telefono</th> </thead> <tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){

		echo "<tr>";
		echo "<td>". $IDProveedor[$pos_row] . "</td>";
		echo "<td>". $Nombre_Proveedor[$pos_row] . "</td>";
		echo "<td>". $Ubicacion[$pos_row] . "</td>";
		echo "<td>". $TelefonoP[$pos_row] . "</td>";
		
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

