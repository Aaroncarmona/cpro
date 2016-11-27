<?php 
    class Cuatrimestre{
        private $id_cu;
        private $cuatri;

        public function inicializar($id_cu,$cuatri){
              $this->id_cu = $id_cu;
              $this->cuatri = $cuatri;
        }
        
        public function getId_cu(){
               return $this->id_cu;
        }
        
        public function getCuatri(){
               return $this->cuatri;
        }
        
        public function setId_cu($id_cu){
               $this->id_cu=$id_cu;
        }
        
        public function setCuatri($cuatri){
               $this->cuatri=$cuatri;
        }
        
    }
?>    