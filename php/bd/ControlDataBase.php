<?php

include_once(FOLDER_PAGES.'Destino.php');

class ControlDataBase
{
    public $conn;
    public function ControlDataBase()
    {
        $this->conn =new mysqli('localhost', 'root', '123456', 'viajes'); 
       
        /* comprobar la conexión */
        /*if ($this->conn->connect_errno) {
            printf("Conexión fallida: %s\n", $this->conn->connect_error);
            exit();
        }*/
    }

    public function getDestinos()
    {
        $listaDestino = array();
        $consulta = "Select * from home";
        $result = $this->conn->query($consulta);

        while($row = $result->fetch_assoc())
        {
            $destino = new Destino;
            $destino->id = $row['id'];
            $destino->nombre =  $row['nombre'] ;
            $destino->destino = $row['destino'];
            $destino->urlFondo = $row['url_fondo'];
            $destino->urlDestino = $row['url_img_destino'];
            $destino->idTag = $row['tag_id'];

            $listaDestino[] = $destino;
        }   
        
        return $listaDestino;
    }
}
?>
