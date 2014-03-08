<?php

$correoEnvio = 'william@terrazsan.com';
//recibe las variables por post.
$correo = $_REQUEST['correo'];
$mensaje = $_REQUEST['mensaje'];
$tel = $_REQUEST['tel'];
$nombre = $_REQUEST['nombre'];

//enviar el correo de contacto de registro al usuario registro


$to  = 'william@terrazsan.com' . ', '; // note the comma
$to .= 'andy645jh@gmail.com';
$asunto = "Contacto Web Terrazsan";

$headers = "From: william@terrazsan.com";


$body=	"
    Nombre: $nombre
    Tel: $tel
    Correo: $correo
	------------------------------------------------------------------------------------------
	
	Mensaje:

	
	$mensaje
	

	------------------------------------------------------------------------------------------

";
@mail($to, $asunto, $body, $headers, $correoEnvio);
header("Location:../pages/Contacto.php")

?> 