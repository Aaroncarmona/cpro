<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="col-lg-12 col-md-12 col-sm-12">
<small><strong>Nota: </strong>El porcentaje mostrado es una estimacion de las diferentes herramientas utilizadas en base a la dificultad de aprendizaje</small><br><br>
    <?php
        $tam = count($datosProyecto);
        $i = 0;
        while($i!==$tam){
            $datoEquipo = $equipo->getById($datosProyecto[$i]->getId_pr());//hija
            $datoD_desarrollo = $d_desarrollo->getById($datosProyecto[$i]->getId_pr());//padre


            //hijas
            $datoAnalisis = $analisis->getById($datoD_desarrollo->getId_an());
            $datoBd = $bd->getById($datoD_desarrollo->getId_bd());
            $datoTipo_desarrollo = $tipo_desarrollo->getById($datoD_desarrollo->getId_td());
            $datoLenguaje = $lenguaje->getById($datoD_desarrollo->getId_lj());

    ?>

    <div class="row"> 
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <center>
            <?php
                if(strlen($datosProyecto[$i]->getLogo_pr()) < 65){
                    echo '<img src="recursos/img/establecido.jpg" class="img-responsive" alt="No se encontro">';
                }else{
                    echo $datosProyecto[$i]->getLogo_pr();
                }
            ?> </center>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
            <?php 
                if($datoD_desarrollo->getId_pr() !== null){
                    $porcentaje = (($datoAnalisis->getNivel_an() + $datoBd->getNivel_bd() + $datoTipo_desarrollo->   getNivel_td() + $datoLenguaje->getNivel_lj()) * 10) /4;
            ?>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentaje ;?>%;">
                <?php echo $porcentaje ;?>%
              </div>
            </div>
            <?php } ?>
            <h1 class="text-danger"><strong>Equipo: </strong><?php echo $datoEquipo->getNombre_eq(); ?></h1> 
            <h3 class="text-info"><strong>Proyecto: </strong><?php echo $datosProyecto[$i]->getNombre_pr(); ?></h3>
            <strong>Objetivo: </strong><?php echo $datosProyecto[$i]->getObj_pr(); ?><br>
            <strong>Duracion: </strong><?php echo $datosProyecto[$i]->getDur_pr(); ?> horas<br>
            <strong>Presupuesto: </strong>$<?php echo $datosProyecto[$i]->getPres_pr(); ?> M.N<br>

            <a href="index.php?proyecto=<?php echo $datosProyecto[$i]->getId_pr(); ?>"><button class="btn btn-info">Ver mas. <span class="glyphicon glyphicon-circle-arrow-right"></span></button></a>
        </div>
    </div>
    <br><hr><br>
    <?php 
        $i++;
        }//fin while 
    ?>
</div>
</div>
</div>