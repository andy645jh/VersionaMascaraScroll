<?php
    
    require_once("bd/ControlDataBase.php");  
    $database = new ControlDataBase;
    $database->getDestinos();
?>
