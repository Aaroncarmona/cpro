<?php
include '../modelo/D_Cu_Gr.php';
class InfoD_Cu_Gr{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "select * from d_cu_gr";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			$obj[$i]= new D_Cu_Gr();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$dato[3]
			);
		}
		return $obj;
	}

	public function getById($id){
		$stmt = "select * from d_cu_gr where id_pr = " . $id;
		echo $stmt;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			$obj= new D_Cu_Gr();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],	
				$dato[3]
			);			
		}
		return $obj;
	}
}
