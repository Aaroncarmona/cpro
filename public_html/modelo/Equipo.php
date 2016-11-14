<?php
class Equipo{
    private $id_eq;
    private $id_pr;
    private $id_as;
    private $nombre_eq;
    private $logo_eq;
    private $lema_eq;

    public function inicializar($id_eq,$id_pr,$id_as,$nombre_eq,$logo_eq,$lema_eq){
        $this->id_eq=$id_eq;
        $this->id_pr=$id_pr;
        $this->id_as = $id_as;
        $this->nombre_eq=$nombre_eq;
        $this->logo_eq=$logo_eq;
        $this->lema_eq=$lema_eq;
    }

    public function getId_as(){
        return $this->id_as;
    }

    public function setId_as($id_as){
        $this->id_as = $id_as;
    }

    public function setId_eq($id_eq){
            $this->id_eq=$id_eq;
    }

    public function getId_eq(){
            return $this->id_eq;
    }

    public function setId_pr($id_pr){
            $this->id_pr=$id_pr;
    }
    public function getId_pr(){
            return $this->id_pr;
    }

    public function setNombre_eq($nombre_eq){
            $this->nombre_eq=$nombre_eq;
    }
    public function getNombre_eq(){
            return $this->nombre_eq;

    }

    public function setLogo_eq($logo_eq){
            $this->logo_eq=$logo_eq;
    }

    public function getLogo_eq(){
            return $this->logo_eq;
    }

    public function setLema_eq($lema_eq){
            $this->lema_eq=$lema_eq;
    }

    public function getLema_eq(){
        return $this->lema_eq;
    }
}
?>