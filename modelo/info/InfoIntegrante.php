<?php
include '../modelo/Integrante.php';
class InfoIntegrante{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$i = 0;
		$stmt = "select * from integrante where id_eq = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[3]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj[$i]= new Integrante();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],	
				$img,	
				$dato[4],	
				$dato[5],	
				$dato[6]
			);
			$i++;
		}
		return $obj;
	}

	public function getAll(){
		$i = 0;
		$stmt = "select * from integrante";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[3]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj[$i]= new Integrante();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],	
				$img,	
				$dato[4],	
				$dato[5],	
				$dato[6]
			);
			$i++;
		}
		return $obj;
	}
}
?>