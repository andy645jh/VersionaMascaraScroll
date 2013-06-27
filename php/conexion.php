<?php
function conectar(){
	
//usuario por defecto
$conn = mysql_connect("localhost","root", "");
//$conn = mysql_connect("localhost","root", "psw123");

if(!$conn){
    die("\nNO conectado");
}
	
	mysql_select_db('viajes', $conn);
	return $conn;
	
}

$sql = "select * from destino";
$res = mysql_query($sql,conectar());

while($row = mysql_fetch_array($res)){
    echo $row["nombre"];
}
?>