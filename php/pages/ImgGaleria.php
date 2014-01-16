<?php
class ImgGaleria
{
    var $id;
    var $src;
    var $titulo;
    var $alt;

    public function ImgGaleria($imgId, $imgSrc, $imgTitulo, $imgAtl)
    {        
        $this->id= $imgId;
        $this->src = $imgSrc;
        $this->titulo = $imgTitulo;
        $this->alt = $imgAtl;
    }
}
?>