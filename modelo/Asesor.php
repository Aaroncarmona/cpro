<?php
class Asesor{
	private $id_as;
	private $nombre_as;
	private $apellido_as;

	public function inicializar($id_as,$nombre_as,$apellido_as){
		$this->id_as = $id_as;
		$this->nombre_as = $nombre_as;
		$this->apellido_as = $apellido_as;
	}
        
	function getId_as() {
            return $this->id_as;
        }

        function getNombre_as() {
            return $this->nombre_as;
        }

        function getApellido_as() {
            return $this->apellido_as;
        }

        function setId_as($id_as) {
            $this->id_as = $id_as;
        }

        function setNombre_as($nombre_as) {
            $this->nombre_as = $nombre_as;
        }

        function setApellido_as($apellido_as) {
            $this->apellido_as = $apellido_as;
        }


}
?>