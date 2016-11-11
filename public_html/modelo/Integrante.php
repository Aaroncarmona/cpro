<?php
class Integrante{
      private $id_in;
      private $id_rl;
      private $id_eq;
      private $foto_in;
      private $nombre_in;
      private $apellido_in;
      private $correo_in;

      public function incializar($id_in,$id_rl,$id_eq,$foto_in,$nombre_in,$apellido_in,$correo_in){
              $this->id_in = $id_in;
              $this->id_rl = $id_rl;
              $this->id_eq = $id_eq;
              $this->foto_in = $foto_in;
              $this->nombre_in = $nombre_in;
              $this->apellido_in = $apellido_in;
              $this->correo_in = $correo_in;
      }
      
      public function getId_in(){
              return $this->id_in;
      }
      public function getId_rl(){
              return $this->id_rl;
      }
      public function getId_eq(){
              return $this->id_eq;
      }
      public function getFoto_in(){
              return $this->foto_in;
      }
      public function getNombre_in(){
              return $this->nombre_in;
      }
      public function getApellido_in(){
              return $this->apellido_in;
      }
      public function getCorreo_in(){
              return $this->correo_in;
      }
      public function setId_in($id_in){
              $this->id_in=$id_in;
      }
      public function setId_rl($id_rl){
              $this->id_rl=$id_rl;
      }
      public function setId_eq($id_eq){
              $this->id_eq=$id_eq;
      }
      public function setFoto_in($foto_in){
              $this->foto_in=$foto_id;
      }
      public function setNombre_in($nombre_in){
              $this->nombre_in=$nombre_in;
      }
      public function setApellido_in($apellido_in){
              $this->apellido_in=$apellido_in;
      }
      public function setCorreo_in($correo_in){
              $this->correo_in=$correo_in;
      }
}
?>