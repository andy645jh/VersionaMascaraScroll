var NUM_ENLACES_SEGMENTO = 6;
var ALTURA_ETIQUETA = 31;

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

    
    posX = window.pageXOffset;
    posY = window.pageYOffset;

    $("body").css("overflow", "hidden");
    $("#dialogo").show();
    scrollTo(posX, posY);

    conectarAjax(tag);
    
}

function conectarAjax(_destino){
    $.ajax({
        // la URL para la petición
        url: '../php/info_destino.php',

        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data: { "destino": _destino },

        // especifica si será una petición POST o GET
        type: 'post',

        // el tipo de información que se espera de respuesta
        dataType: 'html',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (datos) {
            $('#tab1').html(datos);
        }
    }); 
}

function ocultar() {//aun no funciona este codigo

    scrollTo(posX, posY);
    $("body").css("overflow", "visible");
    $("#dialogo").css("display", "none");
    //$("#dialogo").dialog({ modal: true });
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
});

function mostrarInfoDestino(){

    alert("mostrar info destino");
}
/*
$('#fbsection2').click(function(e){
     var $id = e.target;
        alert("id: "+$id);
 });  */