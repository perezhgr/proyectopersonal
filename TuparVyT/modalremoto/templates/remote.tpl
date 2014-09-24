    <!--Modal Eliminar-->
    <div id="modal-consultar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h3 >Ver ciudad</h3>
     </div>
     <div class="modal-body">
      <div id="consulta">
      {foreach from=$Ciudad item=i}
      <p>{$i.nombre_ciudad}</p>
      {/foreach}
      </div> 
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal">Cancelar</button>
      <button class="btn btn-primary" id="eliminar" title="delete">Eliminar Destinatario</button>
    </div>
  </div>
    <!--fin Modal-->