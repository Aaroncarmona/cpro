<?php
class Equipo{
    private $id_eq;
    private $id_pr;
    private $nombre_eq;
    private $foto_eq;
    private $lema_eq;

    public function iniciar($id_eq,$id_pr,$nombre_eq,$foto_eq,$lema_eq){
        $this->id_eq=$id_eq;
        $this->id_pr=$id_pr;
        $this->nombre_eq=$nombre_eq;
        $this->foto_eq=$foto_eq;
        $this->lema_eq=$lema_eq;
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

    public function setFoto_eq($foto_eq){
            $this->foto_eq=$foto_eq;
    }

    public function getFoto_eq(){
            return $this->foto_eq;
    }

    public function setLema_eq($lema_eq){
            $this->lema_eq=$lema_eq;
    }
}
?>