<?php
	echo $_REQUEST['filtro'] . " > ";
	echo $_REQUEST['q'] . " > ";

	
	echo $_REQUEST['filtro'].key

	if (isset($_REQUEST['q']) and $_REQUEST['q'] !== "" and $_REQUEST['filtro'] !== "-1") {


		if ($_REQUEST['filtro']=="ano") { ?>
		
		<input type="text" name="ano" 
		value="<?php echo $_REQUEST['q']?>">
		
		
		<?php }if($_REQUEST['filtro']=="proyecto"){ ?>
		
		<input type="text" name="proyecto" 
		value="<?php echo $_REQUEST['q']?>">


		<?php }if($_REQUEST['filtro']=="integrante"){ ?>
		
		<input type="text" name="integrante" 
		value="<?php echo $_REQUEST['q']?>">
			
		


		<?php }
		$key = array_keys($_REQUEST);
		$value = array_values($_REQUEST);
		echo "Seguimiento de buqueda";
		foreach ($_REQUEST as $key => $value) {
			?>
				<span class="label label-primary"> <?php echo $key . " > " . $value ?></span>
			<?php
		}
		echo var_dump($key);
		
	}else{

	}
?>