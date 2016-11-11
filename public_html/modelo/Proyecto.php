<?php 
class Proyecto{
      
    private $id_pr;
      private $id_tm;
      private $id_ep;
      private $nombre_pr;
      private $foto;
      private $obj_pr;
      private $des_pr;
      private $alcanse_pr;
      private $pres_pr;
      private $dur_pr;
      
      public function inicializar($id_pr,$id_tm,$id_ep,$nombre_pr,$foto,$obj_pr,$des_pr,$alcanse_pr,$pres_pr,$dur_pr){

              $this->id_pr=$id_pr;
              $this->id_tm=$id_tm;
              $this->id_ep=$id_ep;
              $this->nombre_pr=$nombre_pr;
              $this->foto=$foto;
              $this->obj_pr=$obj_pr;
              $this->des_pr=$des_pr;
              $this->alcanse_pr=$alcanse_pr;
              $this->pres_pr=$pres_pr;
              $this->dur_pr=$dur_pr;
      }
    
      public function getId_pr(){
              return $this->id_pr;
      }
      public function getId_tm(){
              return $this->id_tm;
      }
      public function getId_ep(){
              return $this->id_ep;
      }
      public function getNombre_pr(){
              return $this->nombre_pr;
      }
      public function getFoto(){
              return $this->foto;
      }
      public function getObj_pr(){
              return $this->obj_pr;
      }
      public function getDes_pr(){
              return $this->des_pr;
      }
      public function getAlcanse_pr(){
              return $this->alcanse_pr;
      }
      public function getPres_pr(){
              return $this->pres_pr;
      }
      public function getDur_pr(){
              return $this->dur_pr;
      }
      public function setId_pr($id_pr){
              $this->id_pr=$id_pr;
      }
      public function setId_tm($id_tm){
              $this->id_tm=$id_tm;
      }
      public function setId_ep($id_ep){
              $this->id_ep=$id_ep;
      }
      public function setNombre_pr($nombre_pr){
              $this->nombre_pr=$nombre_pr;
      }
      public function setFoto($foto){
              $this->foto=$foto;
      }
      public function setObj_pr($obj_pr){
              $this->obj_pr=$obj_pr;
      }
      public function setDes_pr($des_pr){
              $this->obj_pr=$obj_pr;
      }
      public function setAlcance_pr($alcanse_pr){
              $this->alcanse_pr=$alcanse_pr;
      }
      public function setPres_pr($pres_pr){
              $this->alcanse_pr=$alcanse_pr;
      }
      public function setDur_pr($dur_pr){
              $this->dur_pr=$dur_pr;
      }
}
?>