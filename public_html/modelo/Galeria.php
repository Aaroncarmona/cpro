<?php
class Galeria{
   private $id_gl;
   private $id_ep;
   private $foto_gl;
   private $titulo_gl;
   private $des_gl;
   
   public function inicializar($id_gl, $id_ep, $foto_gl, $titulo_gl, $des_gl) {
       $this->id_gl = $id_gl;
       $this->id_ep = $id_ep;
       $this->foto_gl = $foto_gl;
       $this->titulo_gl = $titulo_gl;
       $this->des_gl = $des_gl;
   }
   
   public function getId_gl() {
       return $this->id_gl;
   }

   public function getId_ep() {
       return $this->id_ep;
   }

   public function getFoto_gl() {
       return $this->foto_gl;
   }

   public function getTitulo_gl() {
       return $this->titulo_gl;
   }

   public function getDes_gl() {
       return $this->des_gl;
   }

   public function setId_gl($id_gl) {
       $this->id_gl = $id_gl;
   }

   public function setId_ep($id_ep) {
       $this->id_ep = $id_ep;
   }

   public function setFoto_gl($foto_gl) {
       $this->foto_gl = $foto_gl;
   }

   public function setTitulo_gl($titulo_gl) {
       $this->titulo_gl = $titulo_gl;
   }

   public function setDes_gl($des_gl) {
       $this->des_gl = $des_gl;
   }
}
?>