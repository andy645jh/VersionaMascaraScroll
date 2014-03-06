<?php
require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');

$controlDataBase = new ControlDataBase;
//$id = $_REQUEST['id'];
$id = 1;
$listaImagenes = $controlDataBase->getImagenesGaleriabyId($id);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Galeria</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="imagetoolbar" content="false">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link href="../css/galleria.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/default.css" >	
    <link rel="stylesheet" type="text/css" href="../css/component.css" /> 
    <script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.galleria.js"></script>
   
	<script type="text/javascript">
   
	
	$(document).ready(function(){
		
		$('.gallery_demo_unstyled').addClass('gallery_demo'); // adds new class name to maintain degradability
		
		$('ul.gallery_demo').galleria({
			history   : true, // activates the history object for bookmarking, back-button etc.
			clickNext : true, // helper for making the image clickable
			insert    : '#main_image', // the containing selector for our main image
			onImage   : function(image,caption,thumb) { // let's add some image effects for demonstration purposes
				
				// fade in the image & caption
				image.css('display','none').fadeIn(1000);
				caption.css('display','none').fadeIn(1000);
				
				// fetch the thumbnail container
				var _li = thumb.parents('li');
				
				// fade out inactive thumbnail
				_li.siblings().children('img.selected').fadeTo(500,0.3);
				
				// fade in active thumbnail
				thumb.fadeTo('fast',1).addClass('selected');
				
				// add a title for the clickable image
				image.attr('title','Next image >>');
			},
			onThumb : function(thumb) { // thumbnail effects goes here
				
				// fetch the thumbnail container
				var _li = thumb.parents('li');
				
				// if thumbnail is active, fade all the way.
				var _fadeTo = _li.is('.active') ? '1' : '0.3';
				
				// fade in the thumbnail when finnished loading
				thumb.css({display:'none',opacity:_fadeTo}).fadeIn(1500);
				
				// hover effects
				thumb.hover(
					function() { thumb.fadeTo('fast',1); },
					function() { _li.not('.active').children('img').fadeTo('fast',0.3); } // don't fade out if the parent is active
				)
			}
		});
	});
	
	</script>

	
</head>
<body>
<div class="container" style="height: auto">
	<header class="clearfix">
        <nav>
            <ul>
                <li><a href="SalidasPedagogicas.php">SALIDAS PEDAGOGICAS</a></li>                        
                <li><a href="Empresa.php">EMPRESA</a></li>  
                <li><a href="Home.php">HOME</a></li>
                                                      
            </ul>
        </nav>
			<div id="contenedor_logo"><div id="logo"></div></div>          
            <nav>
            <ul>      
                <li><a href="Coleccion.php" class="current_page">GALERIA</a></li>               
                <li><a href="Decamerun.php">DECAMERON</a></li>
                <li><a href="Contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
	</header>
    </div>

    <div id="contenedor_galeria">
        <div id="main_image"><div id="titulo_galeria">Titulo</div></div>
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
