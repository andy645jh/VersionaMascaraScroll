var NUM_ENLACES_SEGMENTO = 6;
var ALTURA_ETIQUETA = 32;
var tabTemp;
var seccionActual = null;
var numEnlace = 1;
var posX;
var posY;

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
              
    } else {

    }

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
        var anchoVentana = window.innerWidth;
        var altoVentana = window.innerHeight;
        var avgAlto = altoVentana * 0.7;
        var avgAncho = anchoVentana * 0.7;
        var posTituloX = (anchoVentana / 2) - ($('#titulo1').width() / 2);
        var posImgMovilX = (anchoVentana / 2) - ($('#img_movil').width() / 2);
       
        $('.perfil').css('left', avgAncho);
        $('.perfil').css('top', avgAlto);
        $('#titulo1').css('left', posTituloX);
        $('#img_movil').css('left', posImgMovilX);
        $('#img_movil2').css('left', posImgMovilX);
        $('#img_movil3').css('left', posImgMovilX);
        $('#img_movil4').css('left', posImgMovilX);
        $('#img_movil5').css('left', posImgMovilX);
        $('#img_movil6').css('left', posImgMovilX);
        $('#img_movil7').css('left', posImgMovilX);
    }

    $(window).resize(function () {
        moverPerfil();
    });

    moverPerfil();

});