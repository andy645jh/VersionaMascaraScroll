<?php 

require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');



$controlBd = new ControlDataBase;
$listaDestinos = $controlBd->getDestinos();

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
        <link href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="../js/modernizr.custom.js"></script> 
	</head>
	<body style="display: none">
        <div id="dialogo">
            <div id="fondo"></div>
            <div id="contenido_dialog" > 
                <button id="btn_cerrar_dialogo" onclick="ocultar();">X</button>
                <div id="info_destino" >
                                    
                    <div id="content">
                        <div id="tab1">Cargando...</div>                                           
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
                        <li><a href="Galeria.html">GALERIA</a></li>               
                        <li><a href="Decamerun.php">DECAMERON</a></li>
                        <li><a href="Contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
			</header>
            
			<div id="cbp-fbscroller" class="cbp-fbscroller">
                <div id="menu">
                   
                   <div id="header_menu" class="menu" ></div>
                   <div id="subir" class="flecha_menu" onclick="subir();"></div>
                        <nav> <!--MENU LATERAL-->
                            <?php
                                foreach( $listaDestinos as $destino)
                                {
                                    echo "<a href='#".$destino->idTag."' id= '".$destino->destino."'>".strtoupper($destino->nombre)."</a>";
                                }
                            ?>                          
                         </nav>
                    <div id="bajar" class="flecha_menu" onclick="bajar();"></div>
                    <div id="footer_menu" class="menu"></div>
            </div><!-- SECCIONES DE CADA DESTINO-->
                 <?php
                    foreach( $listaDestinos as $destino)
                    {
                 ?>
                        <section id="#<?php echo $destino->idTag ?>" style="background-image: url(<?php echo $destino->urlFondo ?>)">
                        <div class="base_imgs_moviles dimension_img" style="background-image: url(<?php echo $destino->urlDestino ?>)"></div>
                        <a href="javascript:mostrar('<?php echo $destino->destino ?>','planes','html')" class='perfil'></a>
                        </section>
                <?php
                    }
                    echo "<footer><div>Derechos Reservados<br>TerrazsanTours<br>2014</div></footer>";
                 ?>        
                			             
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

            $(document).ready(function () {               
                $('body').show();
                 mostrar('popup','planes','html');
            });
        </script>
        <script src="../js/Funciones.js"></script>
	</body>
</html>
