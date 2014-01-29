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

        <script type="text/javascript" src="../js/jquery.min.js"></script>
	    <script type="text/javascript" src="../js/jquery.galleria.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="../js/modernizr.custom.js"></script>    
        
       <link href="../css/galeria.css" rel="stylesheet">
       <script type="text/javascript" src="../js/galeria.js"></script>         
      
	</head>
	<body class="body_decamerun">
        <div id="dialogo">
            <div id="fondo"></div> 
            <div id="contenido_dialog" > 
                <button id="btn_cerrar_dialogo" onclick="ocultar();">X</button>
                <div id="info_destino" >     
                    <div id="galeria" style="position:relative; display: none">
    <ul id="jgal">
        <li class="active" title="Flowing Rock" style="background-image: url(../images/imgBaru/flowing-rock.jpg);"><img src="../images/imgBaru/flowing-rock.jpg" alt="Flowing Rock" title="Flowing Rock Caption"></li>       
        <li title="Stones" style="background-image: url(../images/imgBaru/stones.jpg);"><img src="../images/imgBaru/stones.jpg" alt="Stones" title="Stones - from Apple images"></li>
        <li title="Grass Blades" style="background-image: url(../images/imgBaru/grass-blades.jpg);"><img src="../images/imgBaru/grass-blades.jpg" alt="Grass Blades" title="Apple nature desktop images"></li>
        <li title="Ladybug" style="background-image: url(../images/imgBaru/ladybug.jpg);"><img src="../images/imgBaru/ladybug.jpg" alt="Ladybug" title="Ut rutrum, lectus eu pulvinar elementum, lacus urna vestibulum ipsum"></li>
        <li title="Lightning" style="background-image: url(../images/imgBaru/lightning.jpg);"><img src="../images/imgBaru/lightning.jpg" alt="Lightning" title="Black &amp; White"></li>
        <li title="Lotus" style="background-image: url(../images/imgBaru/lotus.jpg);"><img src="../images/imgBaru/lotus.jpg" alt="Lotus" title="Fusce quam mi, sagittis nec, adipiscing at, sodales quis"></li>
        <li title="Mojave" style="background-image: url(../images/imgBaru/mojave.jpg);"><img src="../images/imgBaru/mojave.jpg" alt="Mojave" title="Suspendisse volutpat posuere dui. Suspendisse sit amet lorem et risus faucibus pellentesque."></li>
        <li title="Pier" style="background-image: url(../images/imgBaru/pier.jpg);"><img src="../images/imgBaru/pier.jpg" alt="Pier" title="Proin erat nisi"></li>
        <li title="Sea Mist" style="background-image: url(../images/imgBaru/sea-mist.jpg);"><img src="../images/imgBaru/sea-mist.jpg" alt="Sea Mist" title="Caption text from title"></li>
    </ul>
</div>       

   
                </div>
            </div>          
        </div>
		<div class="container">
			<header class="clearfix">
                <nav>
                    <ul>
                       <li><a href="#">SALIDAS PEDAGOGICAS</a></li>                        
                       <li><a href="Empresa.php">EMPRESA</a></li>  
                       <li><a href="Home.php" class="current_page">HOME</a></li>
                                                      
                    </ul>
                </nav>
				  <div id="contenedor_logo"><div id="logo"></div></div>          
                 <nav>
                    <ul>      
                        <li><a href="Galeria.php">GALERIA</a></li>               
                        <li><a href="Decamerun.php">DECAMERON</a></li>
                        <li><a href="Contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
			</header> 	
                <div id="caja_galeria">                                                            
                    <div style="background-image: url(../images/galeria/baru/btn_galeria_baru.png)"><a href="javascript:mostrarGaleria('baru')" title="section1" id="baru" class="cbp-fbcurrent">BARU</a></div>
                    <div style="background-image: url(../images/galeria/cartagena/btn_galeria_cartagena.png)"><a href="javascript:mostrarGaleria('cartagena')" title="section2" id="cartagena">CARTAGENA</a></div>                            
                    <div style="background-image: url(../images/galeria/isla_palma/btn_galeria_isla_palma.png)"><a href="#fbsection3" title="section3" id="isla_palma">ISLA PALMA</a></div>       
                    <div style="background-image: url(../images/galeria/providencia/btn_galeria_providencia.png)"><a href="#fbsection4" title="section4" id="providencia">PROVIDENCIA</a></div>                                                                         
                    <div style="background-image: url(../images/galeria/san_andres/btn_galeria_san_andres.png)"><a href="#fbsection5" title="section5" id="san_andres">SAN ANDRES</a></div>         
                    <div style="background-image: url(../images/galeria/santamarta/btn_galeria_santamarta.png)"><a href="#fbsection6" title="section6" id="santamarta">SANTAMARTA</a></div>                           
                </div>	
		</div>
       <footer></footer>
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
           var PAGINA_ACTUAL = "GALERIA";
        </script>
        <script src="../js/Funciones.js"></script>
	</body>
</html>
