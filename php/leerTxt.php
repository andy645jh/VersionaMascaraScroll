<?php
    $file = fopen("../info/info.txt", "r") or exit("No se encontro archivo!");

    $txt="";

    while(!feof($file))
    {
        $txt.= fgets($file). "<br />";
    }   

    echo $txt;

    fclose($file);
?>

