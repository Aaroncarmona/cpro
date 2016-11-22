<?php 
class Lenguaje{
    private $id_lj;
    private $nombre_lj;
    private $nivel_lj;
    
    function inicializar($id_lj, $nombre_lj, $nivel_lj) {
        $this->id_lj = $id_lj;
        $this->nombre_lj = $nombre_lj;
        $this->nivel_lj = $nivel_lj;
    }
    
    function getId_lj() {
        return $this->id_lj;
    }

    function getNombre_lj() {
        return $this->nombre_lj;
    }

    function getNivel_lj() {
        return $this->nivel_lj;
    }

    function setId_lj($id_lj) {
        $this->id_lj = $id_lj;
    }

    function setNombre_lj($nombre_lj) {
        $this->nombre_lj = $nombre_lj;
    }

    function setNivel_lj($nivel_lj) {
        $this->nivel_lj = $nivel_lj;
    }
    
}
?>