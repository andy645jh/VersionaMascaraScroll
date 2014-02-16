<?php
class Seccion
{
    var $id;
    var $nombre;
    var $destino;
    var $urlFondo;
    var $urlDestino;
    var $idTag;

    public function Seccion($id, $nombre, $destino, $urlFondo, $urlDestino, $idTag, $id_page, $has_gallery)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->destino = $destino;
        $this->urlFondo = $urlFondo;
        $this->urlDestino = $urlDestino;
        $this->idTag = $idTag;
        $this->id_page = $id_page;
        $this->has_gallery = $has_gallery;
    }
}
?>


