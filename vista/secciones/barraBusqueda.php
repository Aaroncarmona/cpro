<div class="col-lg-9 col-md-12">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <form id="form-buscar" method="get" class="form-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="form-group">
              <select class="form-control" id="filtro" name="filtro">
                <option value="-1">Filtro</option>
                <option value="ao">Ano</option>
                <option value="pr">Proyecto</option>
                <option value="pr_ob">Objetivo</option>
                <option value="pr_dc">Descripcion</option>
                <option value="pr_al">Alcance</option>
                <option value="pr_pre">Presupuesto</option>
                <option value="pr_du">Duracion</option>
                <option value="tm">Tematica</option>
                <option value="eq">Equipo</option>
                <option value="as">Asesor</option>
                <option value="in">Integrante</option>
                <option value="rl">Rol</option>
                <option value="bd">Base de datos</option>
                <option value="an">Analisis</option>
                <option value="lj">Lenguaje</option>
                <option value="td">Tipo de desarrollo</option>
                <option value="tu">Turno</option>
                <option value="gr">Grupo</option>
                <option value="cu">Cuatrimestre</option>
              </select>
            </div>
          </div>

          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
            <div class="form-group">
              <input type="text" name="q" id="q" placeholder="buscar | Limpiar " class="form-control">
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
            include './secciones/parametros.php';
          ?>
        </form>
      </div>
  </div>
</div>
<hr>