var NUM_ENLACES_SEGMENTO = 7;
var ALTURA_ETIQUETA = 32;
var BANNER= 165;
var tabTemp;
var seccionActual = null;
var numEnlace = 1;
var posX;
var posY;
var _espacioImgs;
var _anchoVentana = window.innerWidth;
var _altoVentana = window.innerHeight;
var _paginaActual = PAGINA_ACTUAL; //se obtiene en el script del html de cada pagina

var altura = ALTURA_ETIQUETA * NUM_ENLACES_SEGMENTO;
$('nav').height(altura);
var numNavs = $('nav').children().length;
var segmento = Math.ceil(numNavs / NUM_ENLACES_SEGMENTO);

$(function () {
    cbpFixedScrollLayout.init();
});

 function mostrarGaleria(tag) {
     $("body").css("overflow", "hidden");
    $("#dialogo").show();
   
 }

function mostrar(tag) {

    tabTemp = new TabInfo(tag);

    posX = window.pageXOffset;
    posY = window.pageYOffset;

    $("body").css("overflow", "hidden");
    $("#dialogo").show();
    scrollTo(posX, posY);

}

function mostrarInfo(tipo){
    tabTemp.mostrar(tipo);
}

function ocultar() {
    seccionActual = null;
    tabTemp = null;
    scrollTo(posX, posY);
    $("body").css("overflow", "visible");
    $("#dialogo").hide();   
}

function bajar() {
                   
    if (numEnlace <= segmento) {

        numEnlace++;
        var index = (NUM_ENLACES_SEGMENTO * (numEnlace - 1)) - 1;

        $enlace = $('nav > a:eq(' + index + ')');
        var itemNext = $enlace.attr("id");
             
        $('nav').animate({  scrollTop: 44 * index }, 1000);
              
    }
}

function initGaleria(){
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
}

function limpiar(tag) {   
    tag.value = "";
}

function subir() {       

    if (numEnlace >= 1) {
        numEnlace--;
        var index = (NUM_ENLACES_SEGMENTO * (numEnlace - 1)) -1;

        $enlace = $('nav > a:eq(' + index + ')');
        var itemNext = $enlace.attr("id");
        $('nav').animate({  scrollTop: 44 * index }, 1000);
             
    } else {

    }

}

$(document).ready(function () {

    $("#content div").hide();
    $("#tabs li:first").attr("id", "current");
    $("#content div:first").fadeIn();

    $('#tabs a').click(function (e) {
        e.preventDefault();
        $("#content div").hide();
        $("#tabs li").attr("id", "");
        $(this).parent().attr("id", "current");
        $('#' + $(this).attr('title')).fadeIn();

        initGaleria();
    });

    function moverPerfil() {

        var avgAlto = _altoVentana * 0.7;
        var avgAncho = _anchoVentana * 0.7;
        var posTituloX = (_anchoVentana / 2) - ($('#titulo1').width() / 2);


        $('.perfil').css('left', avgAncho);
        $('.perfil').css('top', avgAlto);
        $('#titulo1').css('left', posTituloX);
    }

    $(window).resize(function () {
        redimensionarImagenes();
        moverPerfil();
    });

    function redimensionarImagenes() {

        if (_paginaActual == "DECAMERUN") {
            _espacioImgs = _altoVentana - BANNER;
            anchoImg = 800;
            //anchoImg = Math.ceil(_espacioImgs * porcentaje);
            //altoImg = Math.floor(anchoImg / proporcionImg);
            //posImg = BANNER + (_espacioImgs * porcentajeEspacioPosImg);

            var $secciones = $('.img_movil');
            anchoMenu = $('#menu').width() / 2;
            // posicionar en el centro horizontalmente       
            $('.base_imgs_moviles').css('left', getPosCentroHorizontal(anchoImg) + anchoMenu);

            //luego modificar el tamaño de cada imagen       
            $.each($secciones,
                function () {

                    $divImg = $(this);
                    $divImg.css('height', 'auto');
                    altoImg = $divImg.height();
                    var posCentro = centrarVerticalmente(_espacioImgs, altoImg);

                    $divImg.css({
                        width: anchoImg,
                        height: altoImg,
                        top: posCentro
                    });
                }
            );

        }

        if (_paginaActual == "HOME") {
            porcentaje = 0.95;
            porcentajeEspacioPosImg = 0.25;
            proporcionImg = 670 / 542;

            _espacioImgs = _altoVentana - BANNER;
            anchoImg = Math.ceil(_espacioImgs * porcentaje);
            altoImg = anchoImg / proporcionImg;
            posImg = BANNER + (_espacioImgs * porcentajeEspacioPosImg);

            var $secciones = $('.dimension_img');

            //centrar el popup
            var posPopup = centrarVerticalmente(_altoVentana, $('#contenido_dialog').height());
            $('#contenido_dialog').css('margin-top', posPopup-BANNER);

            // posicionar en el centro horizontalmente       
            $('.base_imgs_moviles').css('left', getPosCentroHorizontal(anchoImg));

            //luego modificar el tamaño de cada imagen       
            $.each($secciones,
                function () {

                    $divImg = $(this).filter(':first');

                    $divImg.css({
                        width: anchoImg,
                        height: altoImg - 10, //numero para kuadrar
                        top: posImg
                    });
                }
            );
        }

        if (_paginaActual == "EMPRESA") {

            _espacioImgs = _altoVentana - BANNER;
            anchoImg = 800;

            var $secciones = $('.base_imgs_moviles');
            anchoMenu = $('#menu').width() / 2;
            // posicionar en el centro horizontalmente       
            $('.base_imgs_moviles').css('left', getPosCentroHorizontal(anchoImg) + anchoMenu);

            //luego modificar el tamaño de cada imagen       
            $.each($secciones,
                function () {
                    $divImg = $(this).filter(':first');
                    $divImg.css('height', 'auto');
                    altoImg = $divImg.height();
                    var posCentro = centrarVerticalmente(_espacioImgs, altoImg);
                    $divImg.css('max-width', anchoImg);
                    contenido = $('.contenido_empresa').attr('id');
                    //alert("alto imagen: "+contenido);
                    $('#' + contenido).css('background-size', anchoImg + 'px ' + altoImg + 'px');
                    $divImg.css({
                        width: anchoImg,
                        top: posCentro
                    });
                }
            );

            // $('.contenido_empresa').css('background.cover', );

        }
    }

    function getPosCentroHorizontal(anchoDiv) {
        return ((_anchoVentana / 2) - (anchoDiv / 2));
    }

    function centrarVerticalmente(altoEspacio, alturaImg) {
        poscentro = ((altoEspacio / 2) - (alturaImg / 2) + BANNER);
        return poscentro;
    }

    redimensionarImagenes();
    moverPerfil();

});