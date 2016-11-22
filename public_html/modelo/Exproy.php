<?php
class Exproy{
    private $id_ep;
    private $id_ao;
    private $logo_ep;
    private $desc_ep;

    public function inicializar($id_ep,$id_ao,$logo_ep,$desc_ep){
        $this->id_ep=$id_ep;
        $this->id_ao=$id_ao;
        $this->logo_ep=$logo_ep;
        $this->desc_ep=$desc_ep;
    }

    public function getId_ep(){
        return $this->id_ep;
    }

    public function getId_ao(){
        return $this->id_ao;
    }

    public function getLogo_ep(){
        return $this->logo_ep;
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

    public function setLogo_ep($logo_ep){
        $this->logo_ep=$logo_ep;
    }

    public function setDesc_ep($desc_ep){
        $this->desc_ep=$desc_ep;
    }
}
?>