<?php
class CtrlBuscar{

	public function mostrarTodo(){
		$i = 0;
    	$stmt = 
    	$stmt = "select * from proyecto where id_pr in (select id_pr from equipo)";


    	$con = new Conexion();
    	$con->conectar();
    	$query = $con->query($stmt);

    	$proyecto;

    	while ($row = mysqli_fetch_array($query)) {
    		$encode = base64_encode($row[4]);
    		
    		$proyecto[$i] = new Proyecto();
    		$proyecto[$i]->inicializar(
				$row[0],
				$row[1],
				$row[2],
				$row[3],
    			'<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />',
				$row[5],
				$row[6],
				$row[7],
				$row[8],
				$row[9]
    		);
    		$i++; 

    	}
    	return $proyecto;
	}

	public function obtenerEquipos(){
		$i = 0;
    	$stmt = "select * from equipo";


    	$con = new Conexion();
    	$con->conectar();

    	$query = $con->query($stmt);

    	$equipo;

    	while ($row = mysqli_fetch_array($query)) {
    		$encode = base64_encode($row[4]);
    		
    		$equipo[$i] = new Equipo();
    		$equipo[$i]->inicializar(
				$row[0],
				$row[1],
				$row[2],
				$row[3],
    			'<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />',
				$row[5]
    		);
    		$i++; 

    	}
    	return $equipo;
	}

	public function obtenerEquipo($id){
	    	$con = new Conexion();

	    	$con->conectar();
	    	
	    	$stmt = "select * from equipo where id_pr = " .$id;
	    	
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
		}
	}
?>