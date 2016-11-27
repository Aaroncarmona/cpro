<?php
class D_desarrollo{
    private $id_pr;
    private $id_td;
    private $id_bd;
    private $id_lj;
    private $id_an;
    
    function inicializar($id_pr, $id_td, $id_bd, $id_lj, $id_an) {
        $this->id_pr = $id_pr;
        $this->id_td = $id_td;
        $this->id_bd = $id_bd;
        $this->id_lj = $id_lj;
        $this->id_an = $id_an;
    }
    
    function getId_pr() {
        return $this->id_pr;
    }

    function getId_td() {
        return $this->id_td;
    }

    function getId_bd() {
        return $this->id_bd;
    }

    function getId_lj() {
        return $this->id_lj;
    }

    function getId_an() {
        return $this->id_an;
    }

    function setId_pr($id_pr) {
        $this->id_pr = $id_pr;
    }

    function setId_td($id_td) {
        $this->id_td = $id_td;
    }

    function setId_bd($id_bd) {
        $this->id_bd = $id_bd;
    }

    function setId_lj($id_lj) {
        $this->id_lj = $id_lj;
    }

    function setId_an($id_an) {
        $this->id_an = $id_an;
    }
}    
?>