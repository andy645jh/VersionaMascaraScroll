<?php
class ImgGaleria
{
    var $id;
    var $src;
    var $titulo;
    var $alt;

    public function ImgGaleria($imgId, $imgSrc, $imgTitulo, $imgAlt)
    {        
        $this->id= $imgId;
        $this->src = $imgSrc;
        $this->titulo = $imgTitulo;
        $this->alt = $imgAlt;
    }
}
?>