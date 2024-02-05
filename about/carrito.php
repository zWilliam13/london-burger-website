<?php
session_start();
$namepagina = "carrito";
include '../php/header.php';

// Include the cart functions file
include 'cart_functions.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>PRODUCTOS AGREGADOS EN EL CARRITO</h1>

</body>
</html>
<?php

mostrarCarrito();
	?>