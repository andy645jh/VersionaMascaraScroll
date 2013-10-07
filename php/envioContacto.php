<?php

//recibe las variables por post.
$correo = $_REQUEST['correo'];
$mensaje = $_REQUEST['mensaje'];
$tel = $_REQUEST['tel'];
$nombre = $_REQUEST['nombre'];

//enviar el correo de contacto de registro al usuario registro


$to  = 'nitacu@gmail.com' . ', '; // note the comma
$to .= 'carlos.andres.rocha@gmail.com';
$asunto = "Palabras Independencia";

$headers = "From: contacto@btg.com.co";

	
mail($to, $asunto,

	"

	------------------------------------------------------------------------------------------
	
	Mensaje:

	
	$mensaje
	

	------------------------------------------------------------------------------------------

", $headers, $correo);

?> 