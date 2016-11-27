<?php
    $tam = count($datos);
    $i = 0;
    $j = -1;
    $datosEx = null;
    $datosAn = null;
?>
<div class="col-lg-9 col-md-12 ">
    <div class="row">
        <div class="col-lg-12">
            

            <!--div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Galeria</h1>
                                <p>Fotos tomadas durante la Exproy</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Conoce que es la EXPROY!.</h1>
                                <p>Que esperas enterate que es la EXPROY UTN</p>
                                <p><a class="btn btn-lg btn-primary" href="index.php?menu=exproy" role="button">Enterate!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="recursos/img/estatico/cpro.png">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Conoce que es CPRO</h1>
                                <p>Futuro sistema que se planea implementar en la Universidad Tecnologica de Nezahualcoyotl para la gestion de proyectos</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div-->
            
            <!-- carrousel para la implementacion final -->


            <img src="recursos/img/estatico/galeria1.jpg" style="width: 100%" class="img-responsive img-rounded">
        </div>
        
        <?php 
            if($tam !== 0){
            while($i!==$tam){
                if($j!==$datos[$i]->getId_ep()){//se agrega un encabezado cada vez que cambia de año
                    $j =$datos[$i]->getId_ep();
                    $datosEx = $exproy->getById($j);
                    $datosAn = $ano->getById($datosEx->getId_ao());
        ?>
        <div class="col-lg-12">

            <br><br>
            <br><br>
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-7 col-xs-6">
                    <?php echo $datosEx->getLogo_ep(); ?>
                </div>
                <div class="col-lg-9 col-md-10 col-sm-5 col-xs-6">
                <hr>
                    <h1><?php echo $datosEx->getDesc_ep(); ?><br>
                    <small><?php echo $datosAn->getAno(); ?></small></h1>
                    <hr>
                </div>
            </div>
            <br><br>
            <br><br>
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
            
            }else{
                ?>
        <div class="col-lg-12">
            <div class="alert alert-info"><span class="glyphicon glyphicon-exclamation-sign"></span> <strong>Info: </strong>Aun no se agregan fotos</div> </div><?php
            }
        ?>
    </div>
</div>
    
    