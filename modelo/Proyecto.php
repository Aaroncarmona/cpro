<?php 
class Proyecto{
      
      private $id_pr;
      private $id_tm;
      private $id_ep;
      private $id_eq;
      private $nombre_pr;
      private $logo_pr;
      private $obj_pr;
      private $des_pr;
      private $alcance_pr;
      private $pres_pr;
      private $dur_pr;
      
      function inicializar($id_pr, $id_tm, $id_ep, $id_eq, $nombre_pr, $logo_pr, $obj_pr, $des_pr, $alcance_pr, $pres_pr, $dur_pr) {
          $this->id_pr = $id_pr;
          $this->id_tm = $id_tm;
          $this->id_ep = $id_ep;
          $this->id_eq = $id_eq;
          $this->nombre_pr = $nombre_pr;
          $this->logo_pr = $logo_pr;
          $this->obj_pr = $obj_pr;
          $this->des_pr = $des_pr;
          $this->alcance_pr = $alcance_pr;
          $this->pres_pr = $pres_pr;
          $this->dur_pr = $dur_pr;
      }
      
      function getId_pr() {
          return $this->id_pr;
      }

      function getId_tm() {
          return $this->id_tm;
      }

      function getId_ep() {
          return $this->id_ep;
      }

      function getId_eq() {
          return $this->id_eq;
      }

      function getNombre_pr() {
          return $this->nombre_pr;
      }

      function getLogo_pr() {
          return $this->logo_pr;
      }

      function getObj_pr() {
          return $this->obj_pr;
      }

      function getDes_pr() {
          return $this->des_pr;
      }

      function getAlcance_pr() {
          return $this->alcance_pr;
      }

      function getPres_pr() {
          return $this->pres_pr;
      }

      function getDur_pr() {
          return $this->dur_pr;
      }

      function setId_pr($id_pr) {
          $this->id_pr = $id_pr;
      }

      function setId_tm($id_tm) {
          $this->id_tm = $id_tm;
      }

      function setId_ep($id_ep) {
          $this->id_ep = $id_ep;
      }

      function setId_eq($id_eq) {
          $this->id_eq = $id_eq;
      }

      function setNombre_pr($nombre_pr) {
          $this->nombre_pr = $nombre_pr;
      }

      function setLogo_pr($logo_pr) {
          $this->logo_pr = $logo_pr;
      }

      function setObj_pr($obj_pr) {
          $this->obj_pr = $obj_pr;
      }

      function setDes_pr($des_pr) {
          $this->des_pr = $des_pr;
      }

      function setAlcance_pr($alcance_pr) {
          $this->alcance_pr = $alcance_pr;
      }

      function setPres_pr($pres_pr) {
          $this->pres_pr = $pres_pr;
      }

      function setDur_pr($dur_pr) {
          $this->dur_pr = $dur_pr;
      }
}
?>