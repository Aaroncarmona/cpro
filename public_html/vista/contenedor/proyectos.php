<div class="col-lg-9 col-md-12">
    <div class="row">
        <div class="col-md-12">
            <h1><strong>Proyecto: </strong><?php echo $dtProyecto->getNombre_pr(); ?></h1> 
        </div>
    </div>
    <div class="row"> <!--logo-->
        <div class="col-lg-offset-0 col-lg-12 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
        <br class="hidden-xs hidden-lg hidden-sm"> 
            <?php echo $dtProyecto->getLogo_pr(); ?>
        <br class="hidden-xs hidden-lg hidden-sm"> 

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 bg-success">
            <h1>Desarrollo del proyecto</h1><hr>
            <h4><span class="label label-danger"><strong>Tipo de desarrollo</strong></span> <?php echo $dtDesarrollo[1]?></h4>
            <h4><span class="label label-info"><strong>Analisis</strong></span> <?php echo $dtDesarrollo[2]?></h4>
            <h4><span class="label label-success"><strong>Lenguaje</strong></span> <?php echo $dtDesarrollo[3]?></h4>
            <h4><span class="label label-primary"><strong>Base de Datos</strong></span> <?php echo $dtDesarrollo[4]?></h4>
            <br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h1>Informacion del grupo</h1><hr>
            <h4><strong>Cuatrimestre:</strong></span> <?php echo $dtDGrupo[1]?></h4>
            <h4><strong>Grado:</strong></span> <?php echo $dtDGrupo[2]?></h4>
            <h4><strong>Turno:</strong></span> <?php echo $dtDGrupo[3]?></h4>
        </div>    
    </div>
    
    <br>

    <div class="row">
        <div class="col-md-12">  
            <h3><strong>Tematica:</strong> <?php echo $dtTematica->getDes_tm();?></h3>
            <h3><strong>Objetivo:</strong> <?php echo $dtProyecto->getObj_pr(); ?> </h3>
            <h3><strong>Descripcion:</strong> <?php echo $dtProyecto->getDes_pr(); ?> </h3>
            <h3><strong>Alcance:</strong> <?php echo $dtProyecto->getAlcance_pr(); ?> </h3>
            <h3><strong>Presupuesto:</strong> $<?php echo $dtProyecto->getPres_pr(); ?> M.N </h3>
            <h3><strong>Duracion:</strong> <?php echo $dtProyecto->getDur_pr(); ?> horas</h3>
        </div>
    </div>

    <?php 
        if($dtIntegrante!==null){
    ?>
    <div class="row"><!--integrantes-->
        <div class="col-md-12">   
            <h1 class="text-center">Equipo</h1> <br>
        </div>
    </div>

        <?php

            $tam = count($dtIntegrante);
            $i=0;
            while($i!==$tam){
                $dtRol = $cEquipo->obtenerRol($dtIntegrante[$i]->getId_rl());
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <?php echo $dtIntegrante[$i]->getFoto_in(); ?>
                    <div class="caption">
                        <h4><span class="label label-primary"><span class="glyphicon glyphicon-star"></span> <?php echo $dtRol->getDes_rl(); ?></span></h4>
                        <h3 class="text-danger"><strong><?php echo $dtIntegrante[$i]->getApellido_in(); ?></strong> <?php echo $dtIntegrante[$i]->getNombre_in(); ?></h3>
                        <p><strong>Contacto: </strong><?php echo $dtIntegrante[$i]->getCorreo_in(); ?></p>
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