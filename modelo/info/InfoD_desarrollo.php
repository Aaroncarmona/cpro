<?php
include '../modelo/D_desarrollo.php';
class InfoD_desarrollo{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "select * from d_desarrollo";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new D_desarrollo();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4]
			);
			$i++;
		}
		return $obj;
	}

	public function getById($id){
		$stmt = "select * from d_desarrollo where id_pr = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			$obj= new D_desarrollo();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3],
				$dato[4]
			);
		}
		return $obj;
	}
}
