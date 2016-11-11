<?php 
class Evaluador{
    private $id_ed;
    private $nombre_ed;
    private $apellido_ed;
    private $correo_ed;

    public function iniciar($id_ed, $nombre_ed, $apellido_ed, $correo_ed){
        $this->id_ed=$id_ed;
        $this->nombre_ed=$nombre_ed;
        $this->apellido_ed=$apellido_ed;
        $this->correo_ed=$correo_ed;
    }
    
    public function setId_ed($id_ed){
        $this->id_ed=$id_ed;
    }
    
    public function getId_ed(){
        return $this->id_ed;
    }
    
    public function setApellido($apellido_ed){
        $this->apellido_ed=$apellido_ed;
    }
    public function getApellido(){
        return $this->apellido_ed;
    }
    public function setCorreo_ed($correo_ed){
        $this->correo_ed=$correo_ed;
    }
    public function getCorreo_ed(){
        return $this->correo_ed;
    }	
}
?>