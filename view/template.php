<?php  
function sup($titulo="",$seccion=""){

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="view/style/index.css">
	<link rel="stylesheet" type="text/css" href="view/style/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Fredericka+the+Great|Notable&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1,user-scaleble=yes"/>
	 <title>$tituloo</title>
</head>
<body>
	<div class="contenedor">
	<header>Sistema agenda 2019: $seccion</header>
	<nav>
		<a href="index.php?inicio"><i class="fas fa-file"></i>Nuevo</a>
		<a href="index.php?nosotros"><i class="fas fa-male"></i>Contacto</a>
		<a href="index.php?salir"><i class="fas fa-times-circle"></i>Salir</a>
		

	</nav>
	<section>
HTML;
}
	function inferior()
	{
		echo <<<HTML
		
	</section>
	<footer>Web developer:Computacion V</footer>
	</div>
	
</body>
</html>

HTML;
}