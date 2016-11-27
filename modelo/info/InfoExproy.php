<?php
include '../modelo/Exproy.php';
class InfoExproy{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from exproy where id_ep = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[2]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj= new Exproy();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$img,
				$dato[3]
			);			
		}
		return $obj;
	}
}
?>