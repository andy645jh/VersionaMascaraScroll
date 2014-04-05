<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 		     	
		<meta name="author" content="Codrops" /> 
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>	
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
        <link href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="../js/modernizr.custom.js"></script>
        <title>Terrazsantours- Agencia de Viajes</title> 
	</head>
	<body id="empresa">
        <div id="loading"></div>
        <div id="dialogo">
            <div id="fondo"></div>
            <div id="contenido_dialog" >
                <div id="info_destino" >
                    <button id="btn_cerrar_dialogo" onclick="ocultar();">Cerrar</button>
                    <ul id="tabs">
                        <li><a href="#" title="tab1">Destino</a></li>                                        
                    </ul>

                    <div id="content">
                        <div id="tab1">1</div>                                           
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
			<header class="clearfix">
                <nav>
                    <ul>
                        <li><a href="SalidasPedagogicas.php">SALIDAS PEDAGÓGICAS</a></li>
                        <li><a href="#" class="current_page">EMPRESA</a></li>  
                        <li><a href="Home.php">HOME</a></li>                    
                    </ul>
                </nav>
				  <div id="contenedor_logo"><div id="logo"></div></div>          
                 <nav>
                    <ul>    
                        <li><a href="Coleccion.php">GALERÍA</a></li>                 
                        <li><a href="Decamerun.php">DECAMERON</a></li>
                        <li><a href="Contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
			</header>
            
			<div id="cbp-fbscroller" class="cbp-fbscroller">
                <div id="menu">
                   
                   <div id="header_menu" class="menu" ></div>
                   <div id="subir" class="flecha_menu" onclick="subir();"></div>
                        <nav>                        
                            <a href="#fbsection1" title="section1" id="nosotros" class="cbp-fbcurrent">SOBRE NOSOTROS</a>
                            <a href="#fbsection2" title="section2" id="valores">VALORES CORPORATIVOS</a>                     
                        </nav>
                    <div id="bajar" class="flecha_menu" onclick="bajar();"></div>
                    <div id="footer_menu" class="menu"></div>
            </div>
				<section id="fbsection1">
                    <div  class="base_imgs_moviles" >
                        <?php echo file_get_contents("../info/empresa/mision.html"); ?>
                    </div>                   
                </section>
               	<section id="fbsection2">
                       <div class="base_imgs_moviles" >
                           <?php echo file_get_contents("../info/empresa/valores.html"); ?>
                       </div>
                </section>                        							           
			</div>
             <footer>
                    <?php echo file_get_contents("../info/extras/footer.html"); ?>                  
             </footer>
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
        <script type="text/javascript">
            var PAGINA_ACTUAL = "EMPRESA";
        </script>
        <script src="../js/Funciones.js">            
        </script>
	</body>
</html>
