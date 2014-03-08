<?php
require_once('../php/const/Constantes.php');
require_once(FOLDER_BD.'ControlDataBase.php');

$controlDataBase = new ControlDataBase();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Administrador de Terrazsan</title>
        <style type="text/css">
            td
            {
                height: 30px;
                width: 25%;
            }
        </style>
    </head>
    <body>
        <div>
            <div id='seleccion'> 
                <form name='form1' enctype='multipart/form-data' action='subir.php' method='post'>
                    <table border="1">
                        <tr><td><label>Nombre: </label></td><td><input type='text' name='url_imagen'></td></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr><td colspan="2">Seleccione la imagen de Fondo ('.jpg','.png','.gif')</td></tr>
                        <tr><td colspan="2"><input type='file' name='img_fondo'></td></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr><td colspan="2">Seleccione la imagen del destino ('.jpg','.png','.gif')</td></tr>
                        <tr><td colspan="2"><input type='file' name='img_destino'></td></tr>
                        <tr><td colspan="2"></td></tr>
                        <tr><td><input type='submit' value='Guardar Cambios'></td><td><input type='button' value='Cancelar' onClick='cancelar();'></td></tr>
                    </table>
                </form>   
            </div>
            <br>
            <div id='botones'>
                <input type='hidden' name='tipo' id='tipo' value='Ninguna'>
                
                
            </div>
        </div>
    </body>
</html>
