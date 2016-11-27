<?php 
class Grupo{
    private $id_gr;
    private $grupo;

    public function inicializar($id_gr,$grupo){
        $this->id_gr=$id_gr;
        $this->grupo=$grupo;
    }
    public function getId_gr(){
        return $this->id_gr;
    }
    public function getGrupo(){
        return $this->grupo;
    }
    public function setId_gr($id_gr){
        $this->id_gr=$id_gr;
    }
    public function setGrupo($grupo){
        $this->grupo=$grupo;
    }
}
?>