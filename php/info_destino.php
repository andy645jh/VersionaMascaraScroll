<?php
    
require_once("conexion.php");

$sql = "select * from destino";
$res = mysql_query($sql,conectar());

while($row = mysql_fetch_array($res)){
    echo $row["nombre"];
}

return $res;
?>
