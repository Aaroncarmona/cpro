<?php
class Rol{
    private $id_rl;
    private $des_rl;

    public function inicializar($id_rl, $des_rl){
        $this->id_rl=$id_rl;
        $this->des_rl=$des_rl;
    }

    public function getId_rl(){
        return $this->id_rl;
    }

    public function setId_rl($id_rl){
        $this->id_rl= $id_rl;
    }


    public function getDes_rl(){
        return $this->des_rl;

    }
    public function setDes_rl($des_rl){
        $this->des_rl=$des_rl;
    }
}
?>