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

	

	$proyecto = new InfoProyecto();
	$tematica = new InfoTematica();
	$equipo = new InfoEquipo();
	$d_cu_gr = new InfoD_Cu_Gr();
	$exproy = new InfoExproy();
	
	$d_desarrollo = new InfoD_desarrollo();
		$analisis = new InfoAnalisis();
		$lenguaje = new InfoLenguaje();
		$tipo_desarrollo = new InfoTipo_desarrollo();
		$bd = new InfoBd();

	$d_cu_gr = new InfoD_Cu_Gr();
		$cuatrimestre = new InfoCuatrimestre();
		$grupo = new InfoGrupo();
		$turno = new InfoTurno();

	$tematica = new InfoTematica();

	$integarnte = new InfoIntegrante();
	$rol = new InfoRol();

	$asesor = new InfoAsesor();

	$datoProyecto = $proyecto->getById($_REQUEST['proyecto']);
	$datoEquipo = $equipo->getById($datoProyecto->getId_eq());
	
	/*busca si tiene registro del tipo de desarrollo*/
	$datoD_desarrollo = $d_desarrollo->getById($datoProyecto->getId_pr());
		$datoAnalisis = $analisis->getById($datoD_desarrollo->getId_an());
		$datoLenguaje = $lenguaje->getById($datoD_desarrollo->getId_lj());
		$datoTipo_desarrollo = $tipo_desarrollo->getById($datoD_desarrollo->getId_td());
		$datoBd = $bd->getById($datoD_desarrollo->getId_bd());

	$datoD_cu_gr = $d_cu_gr->getById($datoProyecto->getId_pr());
		$datoCuatrimestre = $cuatrimestre->getById($datoD_cu_gr->getId_cu());
		$datoGrupo = $grupo->getById($datoD_cu_gr->getId_gr());
		$datoTurno = $turno->getById($datoD_cu_gr->getId_tu());


	$datoTematica = $tematica->getById($datoProyecto->getId_tm());

	$datoIntegrante = $integarnte->getById($datoEquipo->getId_eq());
	$datoAsesor = $asesor->getById($datoEquipo->getId_as());

	include './secciones/header.html';
	include './secciones/asideEquipo.php';
	include './contenedor/detalladoProyecto.php';
	include './secciones/footer.html';

?>