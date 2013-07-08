<?php

require_once "conexion.php";
$idDestino = $_REQUEST['destino'];
//$idDestino = 1;
$txt='';

$sql = "select url_datos from destino where id_destino =".$idDestino;
$res = mysql_query($sql, conectar());

$url = mysql_fetch_array($res);


leerTxt($url['url_datos']);

function leerTxt ($urlDatos) {
   
    $file = fopen($urlDatos, "r") or exit("No se encontro archivo!");    

    while(!feof($file)){
        $txt.= fgets($file). "<br />";
    }      

    echo $txt;
    fclose($file);
}

echo utf8_decode($txt);
?>
