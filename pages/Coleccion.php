<?php 
require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');

$controlDataBase = new ControlDataBase;
$listaSecciones = $controlDataBase->getSeccionesTienenGaleria();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Terrazsantours- Agencia de Viajes</title>       
       
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Joti+One' rel='stylesheet' type='text/css'>
        <link href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="../css/galleria.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/salidas_pedagogicas.css" /> 
        <script type="text/javascript" src="../js/jquery.min.js"></script>
	    <script type="text/javascript" src="../js/jquery.galleria.js"></script>       
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="../js/modernizr.custom.js"></script>    
        
       <link href="../css/galeria.css" rel="stylesheet">
       <script type="text/javascript" src="../js/galeria.js"></script>         
      
	</head>
	<body class="body_decamerun">
        <div id="loading"></div>  
		<div class="container">
			<header class="clearfix">
                <nav>
                    <ul>
                       <li><a href="SalidasPedagogicas.php">SALIDAS PEDAGÓGICAS</a></li>                       
                       <li><a href="Empresa.php">EMPRESA</a></li>  
                       <li><a href="Home.php" >HOME</a></li>
                                                      
                    </ul>
                </nav>
				  <div id="contenedor_logo"><div id="logo"></div></div>          
                 <nav>
                    <ul>      
                        <li><a href="#" class="current_page">GALERÍA</a></li>               
                        <li><a href="Decamerun.php">DECAMERON</a></li>
                        <li><a href="Contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
			</header> 	
                <div id="espacio"></div>
                <div id="titulo_coleccion"><div id="izq"></div><div id="titulo">GALERIA</div><div id="der"></div></div>
                <div id="contenedor_caja">
                    <div id="caja_galeria">   
                    <?php
                        foreach($listaSecciones as $seccion)
                        {
                            echo "<div class='contenedor_btn_galeria'><a href='Galeria.php?id=".$seccion->id."' title='section6' class='btn_galeria'>".$seccion->nombre."</a></div>";    
                        }                        
                    ?>                     
                    </div>
               </div>	
            
		</div>
         <footer>
                    <?php echo file_get_contents("../info/extras/footer.html"); ?>                  
        </footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- jquery.easing by http://gsgd.co.uk/ : http://gsgd.co.uk/sandbox/jquery/easing/ -->
		<script src="../js/jquery.easing.min.js"></script>
		<!-- waypoints jQuery plugin by http://imakewebthings.com/ : http://imakewebthings.com/jquery-waypoints/ -->
		<script src="../js/waypoints.min.js"></script>
		<!-- jquery-smartresize by @louis_remi : https://github.com/louisremi/jquery-smartresize -->
		<script src="../js/jquery.debouncedresize.js"></script>
		<script src="../js/cbpFixedScrollLayout.js"></script>
        <script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/TabInfo.js"></script>
         <script type="text/javascript">
           var PAGINA_ACTUAL = "COLECCION";
        </script>
        <script src="../js/Funciones.js"></script>
         <script type="text/javascript" src="../js/coleccion.js"></script>
	</body>
</html>
