<?php 

	$nombres = array("ao","pr","pr_ob","pr_dc","pr_al","pr_pre","pr_du","tm","eq","as","in","rl","bd","an","lj","td","tu","gr","cu");
	$nombresCompletos = array("Año","Proyecto","Objetivo","Descripcion","Alcance","Presupuesto","Duracion","Tematica","Equipo","Asignatura","Integrantes","Rol","Base de datos","Analisis","Lenguaje","Tipo de desarrollo","Turno","Grado","Cuatrimestre");
	if ( isset($_REQUEST['filtro']) and $_REQUEST['q'] !== "" )  {
		echo "Filtrados agregados <br>";
		for ($i=0; $i < count($nombres); $i++) { 
			$name = $nombres[$i];
			if($_REQUEST['filtro'] === $name){
			?><input type="hidden" name="<?php echo $name;?>" value="<?php echo $_REQUEST['q'] ?>"/> 
			<span class="label label-primary"> 
			<?php echo $nombresCompletos[$i] . " > " . $_REQUEST['q']; ?>
			</span>&nbsp;
			
			<?php }else if(isset ($_REQUEST[$name] )){ ?>
			<input type="hidden" name="<?php echo $name;?>" value="<?php echo $_REQUEST[$name] ?>"/> 
			
			<span class="label label-primary"> 
			<?php echo $nombresCompletos[$i] . " > " . $_REQUEST[$name]; ?>
			</span>&nbsp;
			<?php }
		}
}else{

	
}

?>