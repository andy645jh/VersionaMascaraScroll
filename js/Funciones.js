 var NUM_ENLACES_SEGMENTO = 3;

      var numEnlace = 1;
      var posX;
      var posY;

      var numNavs = $('nav').children().length;
      var segmento = Math.ceil(numNavs / NUM_ENLACES_SEGMENTO);

      $(function () {
          cbpFixedScrollLayout.init();
      });

      function mostrar() {

          //alert($(this).attr("title"));
          posX = window.pageXOffset;
          posY = window.pageYOffset;

          $("body").css("overflow", "hidden");
          $("#dialogo").show();
          scrollTo(posX, posY);
          //$("#dialogo").dialog({ modal: true });
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