<div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
            {foreach from=$Subcategorias item=i}
              <!--<a name="{$i.id_seccion}"></a>!-->
              <h1 >{$i.nombre_categoria}</h1></br></br>
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <h4 class="text-center">{$i.descripcion}<h4></br></br>
              </div>
            {/foreach}
          </div>
        </div>
</div>
<div class="row">
          {foreach from=$Contenido item =j}
          <div class="col-md-4">
              <img class="img-circle" src="{$j.path}" alt="" style="width: 140px; height: 140px;">
              <h3>{$j.nombre_ciudad}</h3>
              <!--<p>Aca va a ir la descripcion</p>-->
              <p><a class="btn btn-default" href="#" role="button">Ver detalles&raquo;</a></p></br></br></br>
          </div>
          {/foreach}                  
</div>
