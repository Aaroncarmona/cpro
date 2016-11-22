<?php 
class Analisis{
    private $id_an;
    private $nombre_an;
    private $nivel_an;
    
    function inicializar($id_an, $nombre_an, $nivel_an) {
        $this->id_an = $id_an;
        $this->nombre_an = $nombre_an;
        $this->nivel_an = $nivel_an;
    }
    
    function getId_an() {
        return $this->id_an;
    }

    function getNombre_an() {
        return $this->nombre_an;
    }

    function getNivel_an() {
        return $this->nivel_an;
    }

    function setId_an($id_an) {
        $this->id_an = $id_an;
    }

    function setNombre_an($nombre_an) {
        $this->nombre_an = $nombre_an;
    }

    function setNivel_an($nivel_an) {
        $this->nivel_an = $nivel_an;
    }


}
?>