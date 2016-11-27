<?php
include '../modelo/Proyecto.php';
class InfoProyecto{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "select * from proyecto";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[5]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj[$i]= new Proyecto();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],	
				$dato[3],
				$dato[4],
				$img,	
				$dato[6],	
				$dato[7],	
				$dato[8],	
				$dato[9],	
				$dato[10]	

			);
			$i++;
		}
		return $obj;
	}

	public function getById($id){
		$stmt = "select * from proyecto where id_pr = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[5]);
			$img = '<img class="img-responsive style="width:100%;" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj= new Proyecto();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],	
				$dato[3],	
				$dato[4],	
				$img,
				$dato[6],
				$dato[7],	
				$dato[8],	
				$dato[9],	
				$dato[10]
			);			
		}
		return $obj;
	}
}
?>