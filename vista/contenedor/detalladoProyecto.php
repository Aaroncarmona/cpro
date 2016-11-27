<div class="col-lg-9 col-md-12">
    <div class="row">
        <div class="col-md-12">
            <h1><strong>Proyecto: </strong><?php echo $datoProyecto->getNombre_pr(); ?></h1> 
        </div>
    </div>
    <div class="row"> <!--logo-->
        <div class="col-lg-offset-0 col-lg-12 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
        <br class="hidden-xs hidden-lg hidden-sm"> 
            <center>
                
            <?php echo $datoProyecto->getLogo_pr(); ?>
            </center>
        <br class="hidden-xs hidden-lg hidden-sm"> 

        </div>
    </div>
    <br>
    <div class="row">
        <?php 
            if($datoD_desarrollo->getId_pr() !== null){
                $porcentaje = (($datoAnalisis->getNivel_an() + $datoBd->getNivel_bd() + $datoTipo_desarrollo->   getNivel_td() + $datoLenguaje->getNivel_lj()) * 10) /4;
        ?>
        <div class="col-lg-6 col-md-6 col-sm-6 bg-success">
            <h2>Desarrollo del proyecto</h2>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentaje ;?>%;">
                <?php echo $porcentaje ;?>%
              </div>
            </div>
            <h4><span class="label label-danger"><strong>Tipo de desarrollo</strong></span> <?php echo $datoTipo_desarrollo->getTipo_td(); ?></h4>
            <h4><span class="label label-info"><strong>Analisis</strong></span> <?php echo $datoAnalisis->getNombre_an(); ?></h4>
            <h4><span class="label label-success"><strong>Lenguaje</strong></span> <?php echo $datoLenguaje->getNombre_lj(); ?></h4>
            <h4><span class="label label-primary"><strong>Base de Datos</strong></span> <?php echo $datoBd->getNombre_bd(); ?></h4>
            <br>
        </div>
        <?php } ?>
        <?php if($datoD_cu_gr->getId_pr() !== null){ ?>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h2>Informacion del grupo</h2><hr>
            <h4><strong>Cuatrimestre:</strong></span> <?php echo $datoCuatrimestre->getCuatri();?></h4>
            <h4><strong>Grupo:</strong></span> <?php echo $datoGrupo->getGrupo(); ?></h4>
            <h4><strong>Turno:</strong></span> <?php echo $datoTurno->getTurno(); ?></h4>
        </div>  
        <?php } ?>  
    </div>
    
    <br>

    <div class="row">
        <div class="col-md-12">  
            <h3><strong>Tematica:</strong> <?php echo $datoTematica->getDes_tm();?></h3>
            <h3><strong>Objetivo:</strong> <?php echo $datoProyecto->getObj_pr(); ?> </h3>
            <h3><strong>Descripcion:</strong> <?php echo $datoProyecto->getDes_pr(); ?> </h3>
            <h3><strong>Alcance:</strong> <?php echo $datoProyecto->getAlcance_pr(); ?> </h3>
            <h3><strong>Presupuesto:</strong> $<?php echo $datoProyecto->getPres_pr(); ?> M.N </h3>
            <h3><strong>Duracion:</strong> <?php echo $datoProyecto->getDur_pr(); ?> horas</h3>
        </div>
    </div>

    <?php 
        $tam = count($datoIntegrante);
        if($tam > 0){
    ?>
    <div class="row"><!--integrantes-->
        <div class="col-md-12">   
            <h2 class="text-center bg-primary">Informacion del equipo</h2>
            <h2>Asesor del equipo <small><?php echo $datoAsesor->getNombre_as() . " " . $datoAsesor->getApellido_as() ?></small></h2>
        </div>
    </div>

        <?php
            $i=0;
            while($i!==$tam){
                $datoRol = $rol->getById($datoIntegrante[$i]->getId_rl());
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <?php echo $datoIntegrante[$i]->getFoto_in(); ?>
                    <div class="caption">
                        <h4><span class="label label-primary"><span class="glyphicon glyphicon-star"></span> <?php echo $datoRol->getDes_rl(); ?></span></h4>
                        <h3 class="text-danger"><strong><?php echo $datoIntegrante[$i]->getApellido_in(); ?></strong> <?php echo $datoIntegrante[$i]->getNombre_in(); ?></h3>
                        <p><strong>Contacto: </strong><?php echo $datoIntegrante[$i]->getCorreo_in(); ?></p>
                    </div>
            </div>
        </div>
        <?php
        $i++;
        }
    }
        ?>
</div>
</div>
</div>