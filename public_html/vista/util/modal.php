<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datos[$i]->getId_gl()?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><strong>Titulo: </strong><?php echo $datos[$i]->getTitulo_gl();?></h3>
      </div>
      <div class="modal-body">
        <?php echo $datos[$i]->getFoto_gl();?>
        <hr>
        <strong>Descripcion: </strong><?php echo $datos[$i]->getTitulo_gl();?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->