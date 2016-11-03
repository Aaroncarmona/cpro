<?php
    if (isset($_REQUEST['menu'])){//cuando le da click al aside
        if($_REQUEST['menu']=="exproy"){
            include './header.html';
            include './aside.html';
            include './barraBusqueda.html';
            include './estatico/exproy.html';
            include './footer.html';
        }else if($_REQUEST['menu']=="galeria"){
            include './header.html';
            include './aside.html';
            include './estatico/galeria.html';
            include './footer.html';
        }else if($_REQUEST['menu']=="cpro"){
            include './header.html';
            include './aside.html';
            include './barraBusqueda.html';
            include './estatico/cpro.html';
            include './footer.html';
        }
    }else if(isset($_REQUEST['proyecto'])){//cuando se selecciona un equipo
            if($_REQUEST['proyecto']=="1"){
                include './header.html';
                include './asideProyecto.html';
                include './proyectos.html';
                include './footer.html';
            }
    }else{//cuando entra el usuario
        include './header.html';
        include './aside.html';
        include './barraBusqueda.html';
        include './inicio.html';
        include './footer.html';
    }
?>