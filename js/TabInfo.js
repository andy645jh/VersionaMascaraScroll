var TabInfo = function (seccion, page, type) {
    this.type = type;
    this.tabActual = page;
    this.seccionActual = seccion;
    this.mostrar();
}

TabInfo.prototype.mostrar = function () {        
    //this.cargarInfo('#tab1', 'destino');      
    this.cargarInfo('#tab1', this.tabActual);
   // this.cargarInfo('#tab3', 'galeria');
}

TabInfo.prototype.cargarInfo = function (tab, destino) {

    var folder = '/info/' + destino + '/' + this.seccionActual + '.html';
    $(tab).css('display','none');
    $.ajax({
        // la URL para la petición
        url: folder,

        // el tipo de información que se espera de respuesta
        dataType: 'html',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (datos) {
            $(tab).show();
            $(tab).html(datos);
        }
    });

}