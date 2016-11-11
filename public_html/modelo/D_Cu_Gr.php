<?php
class D_Cu_Gr{
    private $id_pr;
    private $id_gr;
    private $id_cu;

    public function incializar($id_pr,$id_gr,$id_cu){
        $this->id_pr=$id_pr;
        $this->id_gr=$id_gr;
        $this->id_cu=$id_cu;
    }

    public function getId_pr(){
        return $this->id_pr;
    }
    
    public function getId_gr(){
        return $this->id_gr;
    }
    
    public function getId_cu(){
        return $this->id_cu;
    }
    
    public function setId_pr($id_pr){
        $this->id_pr=$id_pr;
    }
    
    public function setId_gr($id_gr){
        $this->id_gr=$id_gr;
    }
    
    public function setId_cu($id_cu){
        $this->id_cu=$id_cu;
    }    
}
?>