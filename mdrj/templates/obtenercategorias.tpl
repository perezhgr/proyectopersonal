<div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
            {foreach from=$Categorias item=i}
              <!--<a name="{$i.id_seccion}"></a>!-->
              <h1 >{$i.nombre_categoria}</h1></br></br>
              <p>{$i.descripcion}<p></br></br>             	
            {/foreach}
          </div>
        </div>
</div>