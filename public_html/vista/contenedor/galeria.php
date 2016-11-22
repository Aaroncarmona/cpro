<?php
    $tam = count($datos);
    $i = 0;
    $j = -1;
?>
<div class="col-lg-9 col-md-12 ">
    <div class="row">
        <div class="col-lg-12">
            <img src="recursos/img/estatico/galeria1.jpg" style="width: 100%" class="img-responsive img-rounded">
        </div>
        
        <?php 
            while($i!==$tam){
                if($j!==$datos[$i]->getId_ep()){
                    $j=$datos[$i]->getId_ep();
        ?>
        <div class="col-lg-12">
            <h1 class="text-center bg-info">
                <strong><?php echo $cGaleria->mostrarEx($j); ?></strong>
            </h1>
        </div>
        <?php 
            }
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            <?php echo $datos[$i]->getFoto_gl();?>
            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId_gl()?>"><span class="glyphicon glyphicon-expand"></span> Ampliar y mostrar detalles</button>
            <!--h3>
                <?php echo $datos[$i]->getTitulo_gl();?>
            </h3> 
            <p><?php echo $datos[$i]->getDes_gl();?></p-->
            <p></p>
        </div>
            <?php 
            include 'util/modal.php';
            $i++;
            }
        ?>
    </div>
</div>
    
    