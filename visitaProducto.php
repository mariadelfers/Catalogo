<!DOCTYPE html>

<html lang="en">
	<head>
	  <title>Agenda de productos</title>
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

function presentaProducto($num_rows, $IDProducto, $Precio, $Descripcion) {

	echo "<h1>Productos</h1>";
	echo "$num_rows Productos\n";
	echo "<br />";
	echo "<br />";

	echo	"<thead> <th>IDProducto</th> <th>Precio</th> <th>Descripcion</th> </thead> <tbody>";

	$pos_row = 0;

	while($pos_row < $num_rows){

		echo "<tr>";
		echo "<td>". $IDProducto[$pos_row] . "</td>";
		echo "<td>". $Precio[$pos_row] . "</td>";
		echo "<td>". $Descripcion[$pos_row] . "</td>";
		
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

