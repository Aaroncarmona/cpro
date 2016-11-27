<?php
    
    include '../modelo/info/InfoExproy.php';
    include '../modelo/info/InfoGaleria.php';
    include '../modelo/info/InfoAno.php';

    $exproy = new InfoExproy();
    $galeria = new InfoGaleria();
    $ano = new InfoAno();

    $datos = $galeria->getAll();

    include './secciones/header.html';
    include './secciones/aside.html';
    include './contenedor/galeria.php';
    include './secciones/footer.html';

?>