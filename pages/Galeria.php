<?php
require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');

$controlDataBase = new ControlDataBase;
//$id = $_REQUEST['id'];
$id = 1;
$listaImagenes = $controlDataBase->getImagenesGaleriabyId($id);
$seccion = $controlDataBase->getNameSeccionById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Galería</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="imagetoolbar" content="false">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link href="../css/galleria.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/default.css" >	
    <link rel="stylesheet" type="text/css" href="../css/component.css" /> 
    <link rel="stylesheet" type="text/css" href="../css/salidas_pedagogicas.css" /> 
    <script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.galleria.js"></script>
    

</head>
<body>
<div id="loading"></div>
<div class="container" style="height: auto">
	<header class="clearfix">
        <nav>
            <ul>
                <li><a href="SalidasPedagogicas.php" >SALIDAS PEDAGÓGICAS</a></li>                        
                <li><a href="Empresa.php">EMPRESA</a></li>  
                <li><a href="Home.php">HOME</a></li>
                                                      
            </ul>
        </nav>
			<div id="contenedor_logo"><div id="logo"></div></div>          
            <nav>
            <ul>      
                <li><a href="#"class="current_page">GALERÍA</a></li>               
                <li><a href="Decamerun.php">DECAMERON</a></li>
                <li><a href="Contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
	</header>
    </div>

    <div id="contenedor_galeria">
        <div id="main_image">
            <div id="titulo_pedagogicas">
                <div id="izq"></div>
                <div id="titulo"><?php echo $seccion?></div>
                <div id="der"></div>
            </div>
        </div>
        <ul class="gallery_demo_unstyled">
            <?php
                $cont=1;
                foreach($listaImagenes as $imagen)
                {     
                    if($cont == 1)
                    {
                        echo "<li class='active'><img src=".$imagen->src." alt=".$imagen->alt." title=".$imagen->titulo."></li>";
                        $cont++;
                    }else{
                         echo "<li><img src=".$imagen->src." alt=".$imagen->alt." title=".$imagen->titulo."></li>";
                    }                   
                }
            ?>
           </ul>       
        </div>    
    </div>
</div>
     <script type="text/javascript">
            var PAGINA_ACTUAL = "GALERIA";          
     </script>
     <script src="../js/Funciones.js"></script>    
</body>
</html>
