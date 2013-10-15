var NUM_ENLACES_SEGMENTO = 6;
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


        porcentaje = 0.95;
        porcentajeEspacioPosImg = 0.25;
        proporcionImg = 670 / 542;

        _espacioImgs = _altoVentana - BANNER;
        anchoImg = Math.ceil(_espacioImgs * porcentaje);
        altoImg = Math.floor(anchoImg / proporcionImg);
        posImg = BANNER + (_espacioImgs * porcentajeEspacioPosImg);

        var $secciones = $('.dimension_img');

        // posicionar en el centro horizontalmente       
        $('.base_imgs_moviles').css('left', getPosCentroHorizontal(anchoImg));
        alert("pagina actual:"+_paginaActual);
        //luego modificar el tamaño de cada imagen       
        $.each($secciones,
            function () {
                alert("pagina actual:"+_paginaActual);
                $divImg = $(this).filter(':first');

                $divImg.css({
                    width: anchoImg,
                    height: altoImg,
                    top: posImg
                });
                 
               
            }
        );
        
    }

    function getPosCentroHorizontal(anchoDiv) {
        return ((_anchoVentana / 2) - (anchoDiv / 2));
    }

    function modificarEspecificamente() {
        switch (_paginaActual) {
            case "DECAMERUN":

                break;

            case "EMPRESA":


            case "HOME":

                break;
        }
    }

    function centrarVerticalmente(altoEspacio, alturaImg) {
        return ((altoEspacio / 2) - (alturaImg / 2) + BANNER);
    }
    redimensionarImagenes();
    // modificarEspecificamente();
    moverPerfil();

});