<?php 
class Bd{
    private $id_bd;
    private $nombre_bd;
    private $nivel_bd;
    
    function inicializar($id_bd, $nombre_bd, $nivel_bd) {
        $this->id_bd = $id_bd;
        $this->nombre_bd = $nombre_bd;
        $this->nivel_bd = $nivel_bd;
    }
    
    function getId_bd() {
        return $this->id_bd;
    }

    function getNombre_bd() {
        return $this->nombre_bd;
    }

    function getNivel_bd() {
        return $this->nivel_bd;
    }

    function setId_bd($id_bd) {
        $this->id_bd = $id_bd;
    }

    function setNombre_bd($nombre_bd) {
        $this->nombre_bd = $nombre_bd;
    }

    function setNivel_bd($nivel_bd) {
        $this->nivel_bd = $nivel_bd;
    }



}
?>