<?php
include '../modelo/Conexion.php';
class CtrlAnalisis extends Conexion{
	
	public function __construct(){
		parent::__construct();
		$this->con = $this->conectar();
	}

	public function getAll(){
		$contador = 0;
		$stmt = "select * from Analisis";
		$analisis = null;

		try{
			$query = $this->query($stmt);
			while($columna = mysqli_fetch_array($query)){
				$analisis[$contador] = new Analisis();
				$analisis[$contador]->inicializar(
					$columna[0],/*id*/
					$columna[1],/*nombre*/
					$columna[2]/*nivel*/
					);
				$contador++;
			}
		}catch(Exception $e){
			echo '<div class="alert alert-danger"><strong>Error</strong>: No se puede realizar la consulta en este momento.</div>';
		}
		return $analisis;
	}
}
?>