<?php 
	$url = "http://".$_SERVER['HTTP_HOST']."/London-Burger-&-cheers";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>London Burger &amp; cheers</title>
	<?php 
		if ($namepagina == "inicio") {
				$css="inicio";
			} elseif ($namepagina == "nosotros") {
				$css="nosotro";
			} elseif ($namepagina == "carta") {
				$css="carta";
			}else{
				$css="contactanos";
			}
	?>
	<link rel="stylesheet" href="<?php echo $url?>/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url?>/css/<?php echo $css ?>.css">
	<script src="../js/oscuro.js"></script>
	<script src="https://kit.fontawesome.com/c01fb11645.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">  
</head>
<body>
	<header> 
		<div class="contenedor">
		    <nav class="menu">
				<div class="menu-logo">
					<a href="<?php echo $url?>"><img  src="<?php echo $url?>/img/logo.png"></a>
				</div>
				<div class="menu-iten">
					<div class="sub-menu">
						<ul>
							<li><a href="#" id="modo-oscuro">Modo Oscuro</a></li>
							<li><a id="iniciar-sesion" href="#">Iniciar sesion</a></li>
						</ul>
					</div>
					<ul class="menu-lista">
	                    <li><a href="<?php echo $url?>/index.php">Inicio</a></li>
	                    <li><a href="<?php echo $url?>/about/nosotros.php">Nosotros</a></li>
	                    <li><a href="<?php echo $url?>/about/carta.php">Carta</a></li>
	                    <li><a href="<?php echo $url?>/about/contactanos.php">Contactanos</a></li>
                	</ul>
				</div>
		    </nav>
		</div>
	</header>
	<main>