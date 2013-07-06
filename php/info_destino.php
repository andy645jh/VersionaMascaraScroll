<?php

require_once "conexion.php";

$sql = "select * from destino";
$res = mysql_query($sql, conectar());
$txt;
while ($row = mysql_fetch_array($res)) {
    $txt .= "<li>".$row["nombre"]."</li>";
}

echo $txt;
?>
