<?php
class Tematica{
    private $id_tm;
    private $des_tm;
     
    public function inicializar($id_tm,$des_tm){
        $this->id_tm=$id_tm;
        $this->des_tm=$des_tm;
    }
    
    public function getId_tm(){
        return $this->id_tm;
    }
    
    public function getDes_tm(){
        return $this->des_tm;
    }
    
    public function setId_tm($id_tm){
        $this->id_tm=$id_tm;
    }
    
    public function setDes_tm($des_tm){
        $this->des_tm=$des_tm;
    }
}
?>