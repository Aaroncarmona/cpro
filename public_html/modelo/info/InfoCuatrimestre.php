<?php
include '../modelo/Cuatrimestre.php';
class InfoCuatrimestre{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from cuatrimestre where id_cu = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Cuatrimestre();
			$obj->inicializar(
				$dato[0],	
				$dato[1]
			);
		}
		return $obj;
	}
}
?>