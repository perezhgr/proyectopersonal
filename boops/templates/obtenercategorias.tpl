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

