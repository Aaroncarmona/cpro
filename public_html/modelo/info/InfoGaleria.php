<?php
include '../modelo/Galeria.php';
class InfoGaleria{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getAll(){
		$i = 0;
		$stmt = "select * from galeria order by id_ep desc";
		$obj = null;
		$query = $this->con->query($stmt);
		while ($dato = mysqli_fetch_array($query)) {
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[2]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj[$i]= new Galeria();
			$obj[$i]->inicializar(
				$dato[0],	
				$dato[1],	
				$img,
				$dato[3],
				$dato[4]
			);
		$i++;
		}
		return $obj;
	}

	public function getById($id){
		$stmt = "select * from galeria where id_gl = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[2]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj= new Galeria();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$img,
				$dato[3],
				$dato[4]
			);			
		}
		return $obj;
	}
}
?>