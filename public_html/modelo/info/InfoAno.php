<?php
include '../modelo/Ano.php';
class InfoAno{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from ano where id_ao = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			$obj= new Ano();
			$obj->inicializar(
				$dato[0],	
				$dato[1]
			);
		}
		return $obj;
	}
}
?>