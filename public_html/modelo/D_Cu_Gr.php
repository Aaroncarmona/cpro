<?php
class D_Cu_Gr{
    private $id_pr;
    private $id_gr;
    private $id_cu;
    private $id_tu;
    
    function inicializar($id_pr, $id_gr, $id_cu, $id_tu) {
        $this->id_pr = $id_pr;
        $this->id_gr = $id_gr;
        $this->id_cu = $id_cu;
        $this->id_tu = $id_tu;
    }
    
    function getId_pr() {
        return $this->id_pr;
    }

    function getId_gr() {
        return $this->id_gr;
    }

    function getId_cu() {
        return $this->id_cu;
    }

    function getId_tu() {
        return $this->id_tu;
    }

    function setId_pr($id_pr) {
        $this->id_pr = $id_pr;
    }

    function setId_gr($id_gr) {
        $this->id_gr = $id_gr;
    }

    function setId_cu($id_cu) {
        $this->id_cu = $id_cu;
    }

    function setId_tu($id_tu) {
        $this->id_tu = $id_tu;
    }
}
?>