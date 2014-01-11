<?php
function conectar(){
	
//usuario por defecto
$conn = mysql_connect("localhost","root", "123456");
//$conn = mysql_connect("localhost","root", "psw123");

if(!$conn){
    die("\nNO conectado");
}
	
mysql_select_db('viajes', $conn);
return $conn;
	
}

?>