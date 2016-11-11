<?php
class Evalucacion{
    private $id_pr;
    private $id_ed;
    private $id_pt;
    private $obser_ec;
    private $nota_ec;

    public function iniciar($id_pr,$id_ed,$id_pt,$obser_ec,$nota_ec){
        $this->id_pr=$id_pr;
        $this->id_ed=$id_ed;
        $this->id_pt=$id_pt;
        $this->obser_ec=$obser_ec;
        $this->nota_ec=$nota_ec;
    }

    public function setId_pr($id_pr){
        $this->id_pr=$id_pr;
    }
    public function getId_pr(){
        $this->id_pr=$id_pr;
    }

    public function setId_ed($id_ed){
        $this->id_ed=$id_ed;
    }
    public function getId_ed(){
        return $this->id_ed;
    }
    public function setId_pt($id_pt){
        $this->id_pt=$id_pt;
    }
    
    public function getId_pt(){
        return $this->id_pt;
    }

    public function setObser_ec($obser_ec){
        $this->obser_ec=$obser_ec;
    }
    public function getObser_ec(){
        return $this->obser_ec;
    }
    public function setNota_ec($nota_ec){
        $this->nota_ec=$nota_ec;
    }
    public function getNota_ec(){
        $this->nota_ec;
    }
}
?>