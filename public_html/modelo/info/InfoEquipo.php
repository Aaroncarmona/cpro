<?php
include '../modelo/Equipo.php';
class InfoEquipo{
	private $con;

	public function __construct(){
		$this->con = new Conexion();
		$this->con->conectar();
	}

	public function getById($id){
		$stmt = "select * from equipo where id_eq = " . $id;
		$obj = null;
		$query = $this->con->query($stmt);
		if ($query) {
			$dato = mysqli_fetch_array($query);
			
			/*Cuando hay una imagen asi se puede sacar mas rapido*/
			$encode = base64_encode($dato[3]);
			$img = '<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />';

			$obj= new Equipo();

			$obj->inicializar(
				$dato[0],	
				$dato[1],	
				$dato[2],
				$img
			);			
		}
		return $obj;
	}
}
?>