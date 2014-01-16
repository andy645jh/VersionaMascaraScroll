<?php
    
require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');

$tag = $_REQUEST['tag'];
//echo $tag;
$controlDataBase = new ControlDataBase;
$listaImagenes = $controlDataBase->getImagenesGaleria($tag);

//echo count($listaImagenes);
$html = "";
$html .=  "<div style=''position:relative'>";
$html .= "<ul id='gallery'>";

foreach($listaImagenes as $imagen)
{
    $html .= "<li><img src='".$imagen->src."'></li>";
}
        //<li><img src="../images/imgBaru/flowing-rock.jpg" alt="Flowing Rock" title="Flowing Rock Caption"></li>-->
      
 $html .="</ul></div>"; 

 echo $html;
?>
