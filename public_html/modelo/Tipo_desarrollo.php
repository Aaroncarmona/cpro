<?php
class Tipo_desarrollo{
    private $id_td;
    private $tipo_td;
    private $nivel_td;

    function inicializar($id_td, $tipo_td, $nivel_td) {
        $this->id_td = $id_td;
        $this->tipo_td = $tipo_td;
        $this->nivel_td = $nivel_td;
    }

    function getId_td() {
        return $this->id_td;
    }

    function getTipo_td() {
        return $this->tipo_td;
    }

    function getNivel_td() {
        return $this->nivel_td;
    }

    function setId_td($id_td) {
        $this->id_td = $id_td;
    }

    function setTipo_td($tipo_td) {
        $this->tipo_td = $tipo_td;
    }

    function setNivel_td($nivel_td) {
        $this->nivel_td = $nivel_td;
    }
}
?>