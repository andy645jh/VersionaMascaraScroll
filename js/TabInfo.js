var TabInfo = function (seccion) {

    this.tabActual = "destino";
    this.seccionActual = seccion;
    this.mostrar();
}

TabInfo.prototype.mostrar = function () {        
    this.cargarInfo('#tab1', 'destino');      
    this.cargarInfo('#tab2', 'planes');
   // this.cargarInfo('#tab3', 'galeria');
}

TabInfo.prototype.cargarInfo = function(tab,destino){
    $.ajax({
        // la URL para la petición
        url:'/info/'+ destino+'/'+this.seccionActual+'.html',     
              
        // el tipo de información que se espera de respuesta
        dataType: 'html',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (datos) {
            $(tab).html(datos);
        }
    }); 
}