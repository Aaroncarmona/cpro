<?php
include '../modelo/Rol.php';
class InfoRol{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from rol where id_rl = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Rol();
			$obj->inicializar(
				$dato[0],	
				$dato[1]
			);
		}
		return $obj;
	}
}
?>