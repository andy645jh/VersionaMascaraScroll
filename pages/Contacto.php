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
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<meta name="description" content="Blueprint: Fixed Background Scrolling Layout" />
		<meta name="keywords" content="background scrolling, fixed background, background-attachment, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/contacto.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" /> 
	</head>
	<body>
        <div class="container">
            <header class="clearfix">
                    <nav>
                        <ul>
                            <li><a href="SalidasPedagogicas.html">SALIDAS PEDAGOGICAS</a></li>
                            <li><a href="Empresa.php">EMPRESA</a></li>
                            <li><a href="Home.php">HOME</a></li>                                                   
                        </ul>
                    </nav>
				      <div id="contenedor_logo"><div id="logo"></div></div>          
                     <nav>
                        <ul>        
                            <li><a href="Galeria.html">GALERIA</a></li>               
                            <li><a href="Decamerun.php">DECAMERON</a></li>
                            <li><a href="#">CONTACTO</a></li>
                        </ul>
                    </nav>
			    </header>
             <div id="cuerpo">
                <div id="contacto">
                    <div id="formulario">
                        <form method="post" action="../php/envioContacto.php" enctype="application/x-www-form-urlencoded">
                            <table>                           
                                <tr>
                                    <td><input type="text" name="nombre" value="Nombre:" size="60" MAXLENGTH="60" onfocus="limpiar(this);"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="tel" value="Telefono:" size="60" MAXLENGTH="60" onfocus="limpiar(this);"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="correo" value="Correo:" size="60" MAXLENGTH="60" onfocus="limpiar(this);"></td>
                                </tr>
                                <tr>
                                    <td><textarea name="mensaje" rows="6" cols="46" onfocus="limpiar(this);">Mensaje:</textarea></td>
                                </tr>                           
                           </table>   
                           <div id="datos_contacto">
                                <p>Cel: 312 449 2722- 316 865 0769</p>
                                <p>Email: william@terrazsan.com</p>
                           </div>  
                           <div id="btnEnviar"><input src="../images/enviar.png" type="image"></div>
                     </form>
                  </div>
                 <div id="img_contacto"></div>  
                </div>
                 <footer> <?php echo file_get_contents("../info/extras/footer.html"); ?></footer>
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