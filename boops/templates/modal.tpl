<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
{foreach from=$Detalle item =i}
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      <h4 class="modal-title negro" id="myModalLabel">{$i.nombre_ciudad}</h4>
    </div>
    <div class="modal-body negro">
      <h5 class="text-left">{$i.descripcion}</h5>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar Cambios</button>
    </div>
  </div>
</div>
{/foreach}


</div>
<!-- Fin modal -->