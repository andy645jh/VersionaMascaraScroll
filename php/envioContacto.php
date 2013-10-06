<?php

//recibe las variables por post.



$correo = "contacto@btg.com.co";
$mensaje = "Alguien entró a jugar Palabras de Independencia";


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