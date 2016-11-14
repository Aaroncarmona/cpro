<?php
    $tam = count($datos);
    $i = 0;
    $j = -1;
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <img src="recursos/img/estatico/galeria1.jpg" style="width: 100%" class="img-responsive img-rounded">
        </div>
        
        <?php 
            while($i!==$tam){
                if($j!==$datos[$i]->getId_ep()){
                    $j=$datos[$i]->getId_ep();
        ?>
        <div class="col-md-9">
            <h1 class="text-center">
                <strong><?php echo $cGaleria->mostrarEx($j); ?></strong>
            </h1>
        </div>
        <?php 
            }
        ?>
        <div class="col-md-3">
                <a href="#" id=" <?php echo $datos[$i]->getId_gl()?>">
                <?php echo $datos[$i]->getFoto_gl();?>
                </a>
            <h3>
                <?php echo $datos[$i]->getTitulo_gl();?>
            </h3> 
            <p><?php echo $datos[$i]->getDes_gl();?></p>
        </div>
        
        <?php 
            $i++;
            }
        ?>
        <!--div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2016_2.jpg" class="img-responsive">
            </a> 
            <h3>Reconocimiento</h3> 
            <p>Reconocimiento felicidades</p>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2016_1.jpg" class="img-responsive">
            </a> 
            <h3>Equipo</h3> 
            <p>Equipo 1 fue el ganador</p>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center">
                <strong>Exproy UTN 2015</strong>
            </h1>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2015_1.jpg" class="img-responsive">
            </a> 
            <h3>Damos la bienvenida</h3> 
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,&nbsp;</p>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2015_2.jpg" class="img-responsive">
            </a> 
            <h3>Premios</h3> 
            <p>Algunos premios</p>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2015_3.jpg" class="img-responsive">
            </a> 
            <h3>Gracias</h3> 
            <p>Hasta la proxima EXPROY, lo mejor de los proyectos</p>
        </div>
        
        <div class="col-md-offset-3 col-md-9 ">
            <h1 class="text-center">
                <strong>Exproy UTN 2014</strong>
            </h1>
        </div>
        
        <div class="col-md-offset-3 col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2014_1.jpg" class="img-responsive">
            </a> 
            <h3>1er Lugar</h3> 
            <p>Primer lugar del 4 cuatrimestre</p>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2014_3.jpg" class="img-responsive">
            </a> 
            <h3>En la EXPROY</h3> 
            <p>Comenzando la premiacion de los proyectos</p>
        </div>
        
        <div class="col-md-3">
            <a>
                <img src="recursos/img/estatico/galeria/2014_3.jpg" class="img-responsive">
            </a> 
            <h3>Finaliza</h3> 
            <p>Muchos proyectos presentados hoy</p>
        </div-->
        
    </div>
    
    
</div>