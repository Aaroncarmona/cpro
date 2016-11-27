<?php
class Turno{
    private $id_tu;
    private $turno;
    
    function inicializar($id_tu, $turno) {
        $this->id_tu = $id_tu;
        $this->turno = $turno;
    }

    function getId_tu() {
        return $this->id_tu;
    }

    function getTurno() {
        return $this->turno;
    }

    function setId_tu($id_tu) {
        $this->id_tu = $id_tu;
    }

    function setTurno($turno) {
        $this->turno = $turno;
    }


    
}
?>