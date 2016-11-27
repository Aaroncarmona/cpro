<?php
include '../modelo/Conexion.php';
$con = new Conexion();
$con->conectar();

if($con->comprobar()){
    include './secciones/header.html';
    include './estatico/construccion.html';
    include './secciones/footer.html';
}else{
  
    if (isset($_REQUEST['menu'])){//cuando le da click al aside
        if($_REQUEST['menu']=="exproy"){
            include './secciones/header.html';
            include './secciones/aside.html';
            include './secciones/barraBusqueda.php';
            include './estatico/exproy.html';
            include './secciones/footer.html';
        }else if($_REQUEST['menu']=="galeria"){//Galeria

            include '../control/CtrlGaleria.php';
            
            
        }else if($_REQUEST['menu']=="cpro"){
            include './secciones/header.html';
            include './secciones/aside.html';
            include './secciones/barraBusqueda.php';
            include './estatico/cpro.html';
            include './secciones/footer.html';
        }
    }else if(isset($_REQUEST['proyecto'])){
            
            include '../control/CtrlProyecto.php';
        
    }else{//cuando entra el usuario


        include '../control/CtrlBuscar.php';

    }
}
?>