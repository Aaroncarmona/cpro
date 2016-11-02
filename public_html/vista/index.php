<?php
    if (isset($_REQUEST['menu'])){
        if($_REQUEST['menu']=="exproy"){
            include './header.html';
            include './aside.html';
            include './barraBusqueda.html';
            include './exproy.html';
            include './footer.html';
        }else if($_REQUEST['menu']=="equipo"){
            include './header.html';
            include './aside.html';
            include './barraBusqueda.html';
            include './exproy.html';
            include './footer.html';
        }
    }else{
        include './header.html';
        include './aside.html';
        include './barraBusqueda.html';
        include './inicio.html';
        include './footer.html';
    }
?>