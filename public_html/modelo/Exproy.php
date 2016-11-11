<?php
class Exproy{
    private $id_ep;
    private $id_ao;
    private $imagen_ep;
    private $desc_ep;

    public function inicializar(){
        $this->id_ep=$id_ep;
        $this->id_ao=$id_ao;
        $this->imagen_ep=$imagen_ep;
        $this->desc_ep=$desc_ep;
    }

    public function getId_ep(){
        return $this->id_ep;
    }

    public function getId_ao(){
        return $this->id_ao;
    }

    public function getImagen_ep(){
        return $this->imagen_ep;
    }

    public function getDesc_ep(){
        return $this->desc_ep;
    }

    public function setId_ep($id_ep){
        $this->id_ep=$id_ep;
    }

    public function setId_ao($id_ao){
        $this->id_ao=$id_ao;
    }

    public function setImagen_ep($imagen_ep){
        $this->imagen_ep=$imagen_ep;
    }

    public function setDesc_ep($desc_ep){
        $this->desc_ep=$desc_ep;
    }
}
?>