<!-- Subcategoria-->
<div class="row">
  <div class="col-md-12" role="main">
    <div class="bs-docs-section">
      {foreach from=$Subcategorias item=i}
      <h1 >{$i.nombre_categoria}</h1></br></br>
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h4 class="text-center">{$i.descripcion}<h4></br></br>
        </div>
        {/foreach}
      </div>
    </div>
  </div>
<!-- Fin Subcategoria-->

<!-- Ciudades destacadas-->
  <div class="row">
    {foreach from=$Contenido item =j}
    <div class="col-md-4">
      <img class="img-circle" src="{$j.path}" alt="" style="width: 140px; height: 140px;">
      <h3>{$j.nombre_ciudad}</h3>
      <a class="btn btn-default" role="button">Ver detalle</a>
      <button type="button" class="btn btn-info" data-toggle="modal" 
      data-target="#myModal">
      <i class="fa fa-angle-double-right fa-2x"></i>
    </button></br></br></br></br>                                
  </div>
<!-- Fin-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      <h4 class="modal-title negro" id="myModalLabel">{$j.nombre_ciudad}</h4>
    </div>
    <div class="modal-body negro">
      <h5 class="text-left">Duracion:{$j.duracion}</h5>
      <h5 class="text-left">Precio:{$j.precio}</h5>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar Cambios</button>
    </div>
  </div>
</div>

</div>
{/foreach}
<!-- Fin modal -->