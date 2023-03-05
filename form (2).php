<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo (2).css">
	<title>form</title>
</head>
<body>
<header>				
			<ul class="main-nav">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="productos.html">Productos</a></li>
				<li><a href="precios.html">Precios</a></li>
				<li><a href="nosotros.html">sobre Nosotros</a></li>
				<li><a href="ubicacion.html">ubicacion</a></li>
				<li><a href="php/form (1).php">Contacto</a></li>
			</ul>
		</header>
	<form method="post">
			
		    	<input type="text" class="form__input"  placeholder="nombre" name="name" required="">
		
		    
		    	<input type="email" class="form__input"  placeholder="email" name="email" required="">
		
    
		   
		    	<input type="number" class="form__input" placeholder="telefono" name="telefono" required="">
		

			
			<textarea class="form__input" placeholder="escriba el mensaje" name="msg" required=""></textarea>
		
				<input type="submit" name="enviar"class="boton">
	</form>
		<div class="form-img">
			<div class="img-container">
				
			</div>
		</div>

	<?php
	include("correo.php");
	?>
</body>
</html>