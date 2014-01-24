<?php
function conectar(){
	
//usuario por defecto
//$conn = mysql_connect("localhost","root", "123456");
$conn = mysql_connect("localhost","terrazsa_admin", "terrazsa123456");

if(!$conn){
    die("\nNO conectado");
}
	
mysql_select_db('terrazsa_viajes', $conn);
return $conn;	
}

?>