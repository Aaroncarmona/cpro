<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="col-md-9">
    <?php
        $tam = count($dato);
        $i = 0;
        while($i!==$tam){
            $datoE = $cBuscar->obtenerEquipo($dato[$i]->getId_pr());
    ?>

    <div class="row"> 
        <div class="col-md-4"> 
            <?php
                if(strlen($dato[$i]->getLogo_pr()) < 65){
                    echo '<img src="recursos/img/establecido.jpg" class="img-responsive">';
                }else{
                    echo $dato[$i]->getLogo_pr();
                }
            ?> 
        </div>
        <div class="col-md-8"> 
            <h1 class="text-info"><strong>Proyecto: </strong><?php echo $dato[$i]->getNombre_pr(); ?></h1> 
            <h3 class="text-danger"><strong>Equipo: </strong><?php 

            if($datoE->getNombre_eq() === null ){
                echo "Sin definir";
            }else{
                echo $datoE->getNombre_eq(); 
            }

            ?></h3> 
            <p><strong>Objetivo: </strong><?php echo $dato[$i]->getObj_pr(); ?></p>
            <p><strong>Duracion: </strong><?php echo $dato[$i]->getDur_pr(); ?> horas</p>
            <p><strong>Presupuesto: </strong>$<?php echo $dato[$i]->getPres_pr(); ?> M.N</p>
            <a href="index.php?proyecto=<?php echo $dato[$i]->getId_pr(); ?>"><button class="btn btn-info">Ver mas. <span class="glyphicon glyphicon-circle-arrow-right"></span></button></a>
        </div>
    </div>
    <br><hr><br>
    <?php 
        $i++;
        }//fin while 
    ?>
    <!--div class="row"> 
        <div class="col-md-12"> 
            <div class="text-center">
            <ul class="pagination">
                <li>
                    <a href="#">Prev</a>
                </li>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">Next</a>
                </li>
            </ul>
        </div>
        </div>
            
    </div-->
</div>
</div>
</div>