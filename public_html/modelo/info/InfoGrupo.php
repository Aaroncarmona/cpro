<?php
include '../modelo/Grupo.php';
class InfoGrupo{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from grupo where id_gr = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Grupo();
			$obj->inicializar(
				$dato[0],	
				$dato[1]
			);
		}
		return $obj;
	}
}
?>