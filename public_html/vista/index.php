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
        /**if($_REQUEST['menu']=="exproy"){
            include './secciones/header.html';
            include './secciones/aside.html';
            include './secciones/barraBusqueda.php';
            include './estatico/exproy.html';
            include './secciones/footer.html';
        }else if($_REQUEST['menu']=="galeria"){//Galeria
            include '../control/CtrlGaleria.php';
            include '../modelo/Galeria.php';
            
            $cGaleria = new CtrlGaleria();
            $mGaleria = new Galeria();
            $datos = $cGaleria->mostrarTodo();
            
            include './secciones/header.html';
            include './secciones/aside.html';
            include './contenedor/galeria.php';
            include './secciones/footer.html';
            
            
            
        }else if($_REQUEST['menu']=="cpro"){
            include './secciones/header.html';
            include './secciones/aside.html';
            include './secciones/barraBusqueda.php';
            include './estatico/cpro.html';
            include './secciones/footer.html';
        }else if($_REQUEST['menu']=="construccion"){
            include './secciones/header.html';
            include './secciones/aside.html';
            include './secciones/barraBusqueda.php';
            include './estatico/construccion.html';
            include './secciones/footer.html';
        }
    }else if(isset($_REQUEST['proyecto'])){
            include '../modelo/Proyecto.php';
            include '../modelo/Equipo.php';
            include '../modelo/Exproy.php';
            include '../modelo/Tematica.php';
            include '../modelo/Integrante.php';
            include '../modelo/Rol.php';
            
            include '../control/CtrlEquipo.php';/*seria como el ver mas, no se definio bien el nombre*/
            /*MODELOS*/
            //$mProyecto = new Proyecto();
            /*CONTROL*/
            /*$cEquipo = new CtrlEquipo();
            $mProyecto->setId_pr($_REQUEST['proyecto']);
            
            /*DATOS*/
            /*$dtEquipo = $cEquipo->obtenerEquipo($mProyecto->getId_pr());
            $dtProyecto = $cEquipo->obtenerProyecto($mProyecto->getId_pr());
            $dtTematica = $cEquipo->obtenerTematica($mProyecto->getId_pr());
            $dtDesarrollo = $cEquipo->obtenerDesarrollo($mProyecto->getId_pr());
            $dtDGrupo = $cEquipo->obtenerDetalleGrupo($mProyecto->getId_pr());
            $dtIntegrante = $cEquipo->obtenerIntegrante($dtEquipo->getId_eq());
            //$dtTematica = $cEquipo->obtenerTematica($mProyecto);
            include './secciones/header.html';
            include './secciones/asideProyecto.php';
            include './contenedor/proyectos.php';
            include './secciones/footer.html';
        */
    }else{//cuando entra el usuario
        include './secciones/header.html';
        include './secciones/aside.html';
        include './secciones/barraBusqueda.php';
        include './secciones/footer.html';
    }
}
?>