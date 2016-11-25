<?php
class CtrlGaleria{

    public function mostrarTodo(){
    	$i = 0;
    	$stmt = "select * from galeria order by(id_ep) desc";
    	
    	$con = new Conexion();
    	$galeria = null;

    	$con->conectar();
    	$query = $con->query($stmt);

    	while ($row = mysqli_fetch_array($query)) {
    		$encode = base64_encode($row[2]);
    		
    		$galeria[$i] = new Galeria();
    		$galeria[$i]->inicializar(
				$row[0],
				$row[1],
    			'<img class="img-responsive" src="data:image/jpg;base64,' . $encode . ' " />',
    			$row[3],
    			$row[4]
    		);
    		$i++; 

    	}
    	return $galeria;
    }

    public function mostrarEx($id){
        $stmt = "select desc_ep from exproy where id_ep = " . $id;
        $con = new Conexion();
        $con->conectar();
        $query = $con->query($stmt);
        $dato = mysqli_fetch_array($query);
        return  $dato[0];
    }

}
?>