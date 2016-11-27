<?php
include '../modelo/Turno.php';
class InfoTurno{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from turno where id_tu = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Turno();
			$obj->inicializar(
				$dato[0],	
				$dato[1]
			);
		}
		return $obj;
	}
}
?>