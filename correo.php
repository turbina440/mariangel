<?php
if(isset($_POST['enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['telefono']) && !empty($_POST['msg']) && !empty($_POST['email'])){
		$name = $_POST['name'];
		$telefono = $_POST['telefono'];
		$msg= $_POST['msg'];
		$email = $_POST['email'];


		//datos para el correo
		$destinatario = "turbinagalaxy@gmail.com" ;

		$asunto= "contacto desde nuestra web";
        
		$carta = "De: $name \n"; 
		$carta.="email: $email \n";
		$carta.="Telefono: $telefono \n";
		$carta.="Mensaje: $msg";

		$mail = mail($destinatario,$asunto,$carta);


		if ($mail) {
			echo "<h4>¡mail enviado exitosamente!<br>A la brevedad nos estaremos comunicando con vos</h4>";
		}
	}
}
