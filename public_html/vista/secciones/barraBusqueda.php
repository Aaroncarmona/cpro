<div class="col-lg-9 col-md-12">
  <div class="row">
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">

      <div class="row">
        <form id="form-buscar" class="form-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="form-group">
              <select class="form-control" id="filtro" name="filtro">
                <option value="-1">Filtro</option>
                <option value="ano">Ano</option>
                
                <?php 
                
                $validacion1 = isset($_REQUEST['filtro']) and $_REQUEST['filtro']=="proyecto";
                $validacion2 = true;

                if( !$validacion1 ){?>

                <option value="proyecto">Proyecto</option>
                
                <?php } ?>


                <option value="integrante">Integrante</option>
              </select>
            </div>
          </div>

          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            <div class="form-group">
              <input type="text" name="q" id="q" placeholder="Criterio a buscar" class="form-control">
            </div>
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <div class="form-group">
              <input type="submit" class="btn btn-info" value="Buscar">
              </input>
            </div>
          </div>
            
          <!--donde se van a guadar todos los criterios de las busquedas realizadas-->
          <?php
            include './secciones/asideHidden.php';
          ?>
        </form>
      </div>
  </div>
  <hr>
</div>
</div>