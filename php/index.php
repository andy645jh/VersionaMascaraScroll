<?php
    
    require_once("Page.php");
    $pagina = new Page();
    $pagina->addHeader('en','utf-8','Agregando Header');
    $pagina->display();
    echo "pagina";
?>
