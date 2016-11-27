<?php
include '../modelo/Analisis.php';
class InfoAnalisis{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from analisis where id_an = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Analisis();
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