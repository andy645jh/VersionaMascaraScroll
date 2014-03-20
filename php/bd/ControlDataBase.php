<?php

include_once(FOLDER_PAGES.'Seccion.php');
include_once(FOLDER_PAGES.'ImgGaleria.php');

class ControlDataBase
{
    public $conn;
    public function ControlDataBase()
    {
        //local
        $this->conn =new mysqli('localhost', 'root', '123456', 'viajes'); 
        
        //online
        //$this->conn =new mysqli('localhost', 'terrazsa_admin', 'terrazsa123456', 'terrazsa_viajes'); 
      
               
        /* comprobar la conexión */
        /*if ($this->conn->connect_errno) {
            printf("Conexión fallida: %s\n", $this->conn->connect_error);
            exit();
        }*/
    }

    public function getSecciones()
    {
        $listaDestino = array();
        $consulta = "Select * from home";
        $result = $this->conn->query($consulta);

        while($row = $result->fetch_assoc())
        {
            $seccion = new Seccion($row['id'],$row['nombre'],$row['destino'],$row['url_fondo'],$row['url_img_destino'],$row['tag_id'],$row['id_page'],$row['has_gallery']);
            $listaDestino[] = $seccion;
        }   
        
        return $listaDestino;
    }

    public function getImagenesGaleria($nombreGaleria)
    {
        $listaImgGaleria = array();       
        $consulta = "Select * from Imagen_Galeria where id_seccion = 1";

        $id = $this->getIdFromGaleria($nombreGaleria);       

        $result = $this->conn->query($consulta);

        while($row = $result->fetch_assoc())
        {
            $imgGaleria = new ImgGaleria($row['id_img'], $row['src'], $row['titulo'],$row['alt']);
           $listaImgGaleria[] = $imgGaleria;
        }        
        
        return $listaImgGaleria; 
    }

    public function getImagenesGaleriabyId($id)
    {
        $listaImgGaleria = array();       
        $consulta = "Select * from imagen_galeria where id_seccion = $id";            
        
        $result = $this->conn->query($consulta);

        while($row = $result->fetch_assoc())
        {
            $imgGaleria = new ImgGaleria($row['id_img'], $row['src'], $row['titulo'],$row['alt']);
           $listaImgGaleria[] = $imgGaleria;
        }        
        
        return $listaImgGaleria; 
    }

    public function getSeccionesTienenGaleria()
    {
        $listaIdSecciones = array();
        $consulta = "Select * from home where has_gallery = 1";
        
        $result = $this->conn->query($consulta);

        while($row = $result->fetch_assoc())
        {        
           $seccion = new Seccion($row['id'],$row['nombre'],$row['destino'],$row['url_fondo'],$row['url_img_destino'],$row['tag_id'],$row['id_page'],$row['has_gallery']);    
           $listaIdSecciones[] = $seccion;
        }      
        
        return $listaIdSecciones;  
    }

    private function getIdFromGaleria($nombre)
    {
        $consulta = "Select id_gal from galeria where nombre = '$nombre'";        
        $result = $this->conn->query($consulta);       

        $row = $result->fetch_assoc();       
        return $row['id_gal'];                                      
    }

    public function getNameSeccionById($id)
    {
         $consulta = "Select nombre from home where id =".$id;        
        $result = $this->conn->query($consulta);       

        $row = $result->fetch_assoc();       
        return $row['nombre'];   
    }
}
?>
