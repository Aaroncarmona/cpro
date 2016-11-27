<?php
class Equipo{
    
    private $id_eq;
    private $id_as;
    private $nombre_eq;
    private $logo_eq;
    
    function inicializar($id_eq, $id_as, $nombre_eq, $logo_eq) {
        $this->id_eq = $id_eq;
        $this->id_as = $id_as;
        $this->nombre_eq = $nombre_eq;
        $this->logo_eq = $logo_eq;
    }
    
    function getId_eq() {
        return $this->id_eq;
    }

    function getId_as() {
        return $this->id_as;
    }

    function getNombre_eq() {
        return $this->nombre_eq;
    }

    function getLogo_eq() {
        return $this->logo_eq;
    }

    function setId_eq($id_eq) {
        $this->id_eq = $id_eq;
    }

    function setId_as($id_as) {
        $this->id_as = $id_as;
    }

    function setNombre_eq($nombre_eq) {
        $this->nombre_eq = $nombre_eq;
    }

    function setLogo_eq($logo_eq) {
        $this->logo_eq = $logo_eq;
    }
}
?>