<?php
class CtrlEquipo{

	public function obtenerProyecto($id){

    	$con = new Conexion();
    	$con->conectar();
    	$stmt = "select * from proyecto where id_pr = " . $id;

    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);

		$encode = base64_encode($row[4]);

		$proyecto = new Proyecto();
    		
		$proyecto->inicializar(
			$row[0],
			$row[1],
			$row[2],
			$row[3],
			'<img class="img-responsive" style="width: 100%; height: 400px;" src="data:image/jpg;base64,' . $encode . ' " />',
			$row[5],
			$row[6],
			$row[7],
			$row[8],
			$row[9]
    		);
    	return $proyecto;
	}

	public function obtenerEquipo($id){
    	$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from equipo where id_pr = " .$id;
    	
    	try{	
	    	$query = $con->query($stmt);
	    	$row = mysqli_fetch_array($query);
			$encode = base64_encode($row[4]);
			$equipo = new Equipo();
			$equipo->inicializar(
				$row[0],
				$row[1],
				$row[2],
				$row[3],
				'<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />',
				$row[5]
			);
    		return $equipo;
    	}catch(Exception $e){
    		return null;
    	}
	}

	public function obtenerTematica($id){
		$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from tematica where id_tm = " .$id;
    	
    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);
    		
		$tematica = new Tematica();
		$tematica->inicializar(
			$row[0],
			$row[1]
		);
    	return $tematica;
	}	

	public function obtenerDesarrollo($id){
		$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from v_d_desarrollo where id_pr = " .$id;
    	
    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);
    		
		$desarrollo = array(
			$row[0],
			$row[1],
			$row[2],
			$row[3],
			$row[4]
		);
    	return $desarrollo;
	}	

	public function obtenerDetalleGrupo($id){
		$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from v_d_cu_gr where id_pr = " .$id;
    	
    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);
    		
		$v_d_cu_gr = array(
			$row[0],
			$row[1],
			$row[2],
			$row[3]
		);
    	return $v_d_cu_gr;
	}

	public function obtenerIntegrante($id){
		$i = 0;
    	$stmt = "select * from integrante where id_eq = " . $id;

    	$con = new Conexion();
    	$con->conectar();

    	try{

	    	$query = $con->query($stmt);

	    	$integrante;

	    	while ($row = mysqli_fetch_array($query)) {
	    		$encode = base64_encode($row[3]);
	    		
	    		$integrante[$i] = new Integrante();
	    		$integrante[$i]->inicializar(
					$row[0],
					$row[1],
					$row[2],
	    			'<img class="img-responsive img-circle" src="data:image/jpg;base64,' . $encode . ' " />',
					$row[4],
					$row[5],
					$row[6]
	    		);
	    		$i++; 
	    	}
	    	return $integrante;
	    }catch(Exception $e){
	    	return null;
	    }
	}

	public function obtenerAsesor($id){
		$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from tematica where id_tm = " .$id;
    	
    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);
    		
		$tematica = new Tematica();
		$tematica->inicializar(
			$row[0],
			$row[1]
		);
    	return $tematica;
	}	

	public function obtenerRol($id){
		$con = new Conexion();

    	$con->conectar();
    	
    	$stmt = "select * from rol where id_rl = " . $id;
    	
    	$query = $con->query($stmt);

    	$row = mysqli_fetch_array($query);
    		
		$rol = new Rol();
		$rol->inicializar(
			$row[0],
			$row[1]
		);
    	return $rol;
	}	
}
?>