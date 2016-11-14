<div class="container">
    <div class="row">
        <div class="col-sm-3 sidenav">
                  <!-- Blog Search Well -->
            <a href="index.php"><button class="btn btn-block btn-success hidden-xs"> <span class="glyphicon glyphicon-arrow-left"></span> Regresar</button></a>
            <br>    
                <div class="thumbnail">
                    <?php echo $dtEquipo->getLogo_eq(); ?>
                    <div class="caption">
                        <h3><strong>Equipo:</strong><span class="text-danger"> <br><?php echo $dtEquipo->getNombre_eq(); ?></span></h3>
                        <p>"<?php echo $dtEquipo->getLema_eq(); ?>"</p>
                        <!--EXPROY UTN 2016-->
                    </div>
                </div>
                    
                    
        </div>