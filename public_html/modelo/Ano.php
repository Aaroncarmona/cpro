<?php 
class ano{
    private $id_ao;
    private $ano;

    public function iniciar($id_ao,$ano){
        $this->id_ao=$id_ao;
        $this->ano=$ano;
    }

    public function setId_ao($id_ao){
        $this->id_ao=$id_ao;
    }
    
    public function gerId_ao(){
        return $this->id_ao;
    }
    
    public function setAno($ano){
        $this->ano=$ano;
    }

    public function getAno(){
        return $this->ano;
    }
}
?>