<?php 
$path = $_SERVER['DOCUMENT_ROOT']. "/";
$pathCssDefault = $path."css/default.css";
//echo $pathCssDefault;
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Terrasan- Agencia de Viajes</title> 
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<meta name="description" content="Blueprint: Fixed Background Scrolling Layout" />
		<meta name="keywords" content="background scrolling, fixed background, background-attachment, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
        <link href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="../js/modernizr.custom.js"></script>
       
	</head>
	<body>
        <div id="dialogo">
            <div id="fondo"></div>           
        </div>
		<div class="container">
			<header class="clearfix">
                <nav>
                    <ul>
                        <li><a href="Home.php">HOME</a></li>
                        <li><a href="Empresa.php">EMPRESA</a></li>                       
                    </ul>
                </nav>
				  <div id="contenedor_logo"><div id="logo"></div></div>          
                 <nav>
                    <ul>                     
                        <li><a href="#">DECAMERUN</a></li>
                        <li><a href="Contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
			</header>
            
			<div id="cbp-fbscroller" class="cbp-fbscroller">
                <div id="menu">
                   
                   <div id="header_menu" class="menu" ></div>
                   <div id="subir" class="flecha_menu" onclick="subir();"></div>
                        <nav>                        
                            <a href="#fbsection1" title="section1" id="baru" class="cbp-fbcurrent">BARU</a>
                            <a href="#fbsection2" title="section2" id="cartagena">CARTAGENA</a>                            
                            <a href="#fbsection3" title="section3" id="isla_palma">ISLA PALMA</a>       
                            <a href="#fbsection4" title="section4" id="providencia">PROVIDENCIA</a>                                                                         
                            <a href="#fbsection5" title="section5" id="san_andres">SAN ANDRES</a>         
                            <a href="#fbsection6" title="section6" id="santamarta">SANTAMARTA</a>                           
                        </nav>
                    <div id="bajar" class="flecha_menu" onclick="bajar();"></div>
                    <div id="footer_menu" class="menu"></div>
            </div>
				<section id="fbsection1">
                    <div class="base_imgs_moviles img_movil" style="background-image: url(../images/img_baru.jpg)">
                          <?php echo file_get_contents("../info/decamerun/baru.html"); ?>
                    </div>
                </section>
               	<section id="fbsection2">
                       <div id="img_movil2" class="base_imgs_moviles" style="background-image: url(../images/img_cartagena.png)">
                         <?php echo file_get_contents("../info/decamerun/cartagena.html"); ?>
                      </div>
                   </section>                        
				<section id="fbsection3">
                    <div id="img_movil3" class="base_imgs_moviles" style="background-image: url(../images/img_isla_palma.png)">
                         <?php echo file_get_contents("../info/decamerun/palma.html"); ?>
                    </div>
                </section>
				<section id="fbsection4">
                    <div id="img_movil4" class="base_imgs_moviles" style="background-image: url(../images/img_providencia.png)">
                         <?php echo file_get_contents("../info/decamerun/providencia.html"); ?>
                    </div>
                </section>
				<section id="fbsection5">
                    <div id="img_movil5" class="base_imgs_moviles" style="background-image: url(../images/img_san_andres.png)">
                         <?php echo file_get_contents("../info/decamerun/san_andres.html"); ?>
                    </div>
                </section>
                <section id="fbsection6">
                    <div id="img_movil6" class="base_imgs_moviles" style="background-image: url(../images/img_santamarta.png)">
                         <?php echo file_get_contents("../info/decamerun/santamarta.html"); ?>
                    </div>
                </section>				          
               			             
			</div>
           
		</div>
       
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
        <script src="../js/Funciones.js"></script>
	</body>
</html>
