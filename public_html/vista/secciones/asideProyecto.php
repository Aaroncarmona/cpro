<div class="container">
    <div class="row">
        <div class="col-lg-3 sidenav">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <a href="index.php"><button class="btn btn-block btn-success"> <span class="glyphicon glyphicon-arrow-left"></span> Regresar</button></a>
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
            </div>
        </div>