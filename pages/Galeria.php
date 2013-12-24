<!DOCTYPE html>
<html>
<head>
    <title>Galleria</title>
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
	<style media="screen,projection" type="text/css">
	
	/* BEGIN DEMO STYLE */
	
	.caption{font-style:italic;color:#887;}
	.demo{position:relative;margin-top:2em;}
	.gallery_demo{width:702px;margin:0 auto;}
	.gallery_demo li{width:68px;height:50px;border:3px double #111;margin: 0 2px;background:#000;}
	.gallery_demo li div{left:240px}
	.gallery_demo li div .caption{font:italic 0.7em/1.4 georgia,serif;}
	
	#main_image{margin:0 auto 60px auto;height:438px;width:700px;background:black;}
	#main_image img{margin-bottom:10px;}
	
	.nav{padding-top:15px;clear:both;font:80% 'helvetica neue',sans-serif;letter-spacing:3px;text-transform:uppercase;}
	
	.info{text-align:left;width:700px;margin:30px auto;border-top:1px dotted #221;padding-top:30px;}
	.info p{margin-top:1.6em;}
	
    </style>
	
</head>
<body>
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
    </div>
	<div id="cbp-fbscroller" class="cbp-fbscroller" style="height: auto">
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
                    <a href="#fbsection7" title="section7" id="san_andres" >SAN ANDRES</a>
                    <a href="#fbsection8" title="section8" id="san_gil" >SAN GIL</a>
                    </nav>
            <div id="bajar" class="flecha_menu" onclick="bajar();"></div>
            <div id="footer_menu" class="menu"></div>
        </div>

    <div class="demo">
    <div id="main_image"></div>
    <ul class="gallery_demo_unstyled">
        <li><img src="../images/imgBaru/flowing-rock.jpg" alt="Flowing Rock" title="Flowing Rock Caption"></li>
        <li><img src="../images/imgBaru/stones.jpg" alt="Stones" title="Stones - from Apple images"></li>
        <li class="active"><img src="../images/imgBaru/grass-blades.jpg" alt="Grass Blades" title="Apple nature desktop images"></li>
        <li><img src="../images/imgBaru/ladybug.jpg" alt="Ladybug" title="Ut rutrum, lectus eu pulvinar elementum, lacus urna vestibulum ipsum"></li>
        <li><img src="../images/imgBaru/lightning.jpg" alt="Lightning" title="Black &amp; White"></li>
        <li><img src="../images/imgBaru/lotus.jpg" alt="Lotus" title="Fusce quam mi, sagittis nec, adipiscing at, sodales quis"></li>
        <li><img src="../images/imgBaru/mojave.jpg" alt="Mojave" title="Suspendisse volutpat posuere dui. Suspendisse sit amet lorem et risus faucibus pellentesque."></li>
        <li><img src="../images/imgBaru/pier.jpg" alt="Pier" title="Proin erat nisi"></li>
        <li><img src="../images/imgBaru/sea-mist.jpg" alt="Sea Mist" title="Caption text from title"></li>
    </ul>
    <p class="nav"><a href="#" onclick="$.galleria.prev(); return false;">&laquo; previous</a> | <a href="#" onclick="$.galleria.next(); return false;">next &raquo;</a></p>
    </div>
</div>
     <script type="text/javascript">
            var PAGINA_ACTUAL = "GALERIA";          
     </script>
     <script src="../js/Funciones.js"></script>
</body>
</html>
