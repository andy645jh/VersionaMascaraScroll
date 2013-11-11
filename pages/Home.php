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
		<title>Terrazsantours- Agencia de Viajes</title>      
		<meta name="description" content="Blueprint: Fixed Background Scrolling Layout" />
		<meta name="keywords" content="background scrolling, fixed background, background-attachment, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" /> 
         <link href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="../js/modernizr.custom.js"></script> 
	</head>
	<body>
        <div id="dialogo">
            <div id="fondo"></div>
            <div id="contenido_dialog" > 
                <button id="btn_cerrar_dialogo" onclick="ocultar();">X</button>
                <div id="info_destino" >
                                    
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
                       <li><a href="Home.php">HOME</a></li>
                       <li><a href="Empresa.php">EMPRESA</a></li>                                 
                    </ul>
                </nav>
				  <div id="contenedor_logo"><div id="logo"></div></div>          
                 <nav>
                    <ul>                     
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
                            <a href="#fbsection1" title="section1" id="amazonas" class="cbp-fbcurrent">AMAZONAS</a>  
                            <a href="#fbsection2" title="section2" id="boyaca">BOYACA</a>         
                            <a href="#fbsection3" title="section3" id="eje_cafetero">EJE CAFETERO</a>  
                            <a href="#fbsection4" title="section4" id="guajira">GUAJIRA</a>       
                            <a href="#fbsection5" title="section5" id="llanos_orientales">LLANOS ORIENTALES</a>
                            <a href="#fbsection6" title="section6" id="medellin">MEDELLIN</a>
                            <a href="#fbsection7" title="section7" id="san_gil" >SAN GIL</a>
                         </nav>
                    <div id="bajar" class="flecha_menu" onclick="bajar();"></div>
                    <div id="footer_menu" class="menu"></div>
            </div>
                 <section id="fbsection1" style="background-image: url(../images/img1.jpg)">
                    <div class="base_imgs_moviles dimension_img" style="background-image: url(../images/img_amazonas.png)">
                    </div><a href="javascript:mostrar('amazonas')" title="section1" class="perfil"></a>
                </section>		
                 <section id="fbsection2" style="background-image: url(../images/img2.jpg)">
                    <div class="base_imgs_moviles dimension_img"  style="background-image: url(../images/img_boyaca.png)">
                    </div><a href="javascript:mostrar('boyaca')" title="section2" class="perfil"></a>
                </section>	
                <section id="fbsection3" style="background-image: url(../images/img3.jpg)">
                    <div class="base_imgs_moviles dimension_img"  style="background-image: url(../images/img_ejecafetero.png)"></div>
                    <a href="javascript:mostrar('eje_cafetero')" title="section3" class="perfil"></a>
                </section>	
                <section id="fbsection4" style="background-image: url(../images/img4.jpg)">
                    <div class="base_imgs_moviles dimension_img"  style="background-image: url(../images/img_guajira.png)">
                    </div><a href="javascript:mostrar('guajira')" title="section4" class="perfil"></a>
                </section>					
               	<section id="fbsection5" style="background-image: url(../images/img5.jpg)">
                       <div class="base_imgs_moviles dimension_img"  style="background-image: url(../images/img_llanos.png)"></div>
                       <a href="javascript:mostrar('llanos_orientales')" title="section5" class="perfil"></a>
                </section>              		          
                <section id="fbsection6" style="background-image: url(../images/img6.jpg)">
                    <div class="base_imgs_moviles dimension_img"  style="background-image: url(../images/img_medellin.png)">
                    </div><a href="javascript:mostrar('medellin')" title="section6" class="perfil"></a>
                </section>				           
                <section id="fbsection7" style="background-image: url(../images/img7.jpg)">
                    <div class="base_imgs_moviles dimension_img" style="background-image: url(../images/img_sangil.jpg)"></div>
                    <a href="javascript:mostrar('san_gil')" title="section7" class="perfil"></a>
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
         <script type="text/javascript">
            var PAGINA_ACTUAL = "HOME";
        </script>
        <script src="../js/Funciones.js"></script>
	</body>
</html>
