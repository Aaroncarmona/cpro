<?php
include '../modelo/Tipo_desarrollo.php';
class InfoTipo_desarrollo{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from tipo_desarrollo where id_td = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Tipo_desarrollo();
			$obj->inicializar(
				$dato[0],	
				$dato[1],
				$dato[2]
			);
		}
		return $obj;
	}
}
?>