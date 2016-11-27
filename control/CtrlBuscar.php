<?php
	include '../modelo/info/InfoProyecto.php'; //nivel 0
	
	include '../modelo/info/InfoTematica.php';//nivel 1
	include '../modelo/info/InfoEquipo.php';
	include '../modelo/info/InfoD_desarrollo.php';
	include '../modelo/info/InfoD_Cu_Gr.php';


	include '../modelo/info/InfoExproy.php';//nivel 2	
	include '../modelo/info/InfoCuatrimestre.php';
	include '../modelo/info/InfoGrupo.php';
	include '../modelo/info/InfoTurno.php';

	include '../modelo/info/InfoAsesor.php';//nivel 3
	include '../modelo/info/InfoIntegrante.php';
	include '../modelo/info/InfoTipo_desarrollo.php';
	include '../modelo/info/InfoLenguaje.php';
	include '../modelo/info/InfoAnalisis.php';
	include '../modelo/info/InfoBd.php';

	include '../modelo/info/InfoRol.php';//nivel 4

	//creacion de objetos y despues se manda a llamar las partes de la pagina
	$proyecto = new InfoProyecto();
	$equipo = new InfoEquipo();
	$d_desarrollo = new InfoD_desarrollo();
	
	$analisis = new InfoAnalisis();
	$bd = new InfoBd();
	$tipo_desarrollo = new InfoTipo_desarrollo();
	$lenguaje = new InfoLenguaje();


	$datosProyecto = $proyecto->getAll();


	include './secciones/header.html';
	include './secciones/aside.html';
	include './secciones/barraBusqueda.php';
	include './contenedor/proyectos.php';



	include './secciones/footer.html';
?>