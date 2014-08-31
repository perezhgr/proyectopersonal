<div id="contenido">
	{foreach from =$Ciudad item=i}
	<!-- Titulo -->
	<div class="row">
		<div class="col-md-12">
			<div class="bs-docs-section">
				<h1>Detalle del Paquete</h1></br>
				<h2>{$i.nombre_ciudad}<h2><br>       
			</div>              
		</div>              
	</div></br>

<!-- Carousel -->
<div class="row">
  <div class="col-md-10">
   <div id="myCarousel" class="carousel">
    <div class=""carousel-inner>
      <div class="item active">
        {foreach from =$Imagen item=j}
        <div style="height:30%; width:30%; float: left; margin-right: 10px;">
          <img alt="320x240" src="{$j.path}" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title=""/>
        </div>
        {/foreach}
      </div> 
    </div>    

   </div>
  </div>
  <div class="col-md-2">
      <button type="button" class="btn btn-info btn-lg btn-block">
      <i class="fa fa-shopping-cart fa-2x"></i>
    </button>
  </div>
</div></br></br>
<!-- Fin de carousel -->	

		<div class="row">
			<div class="col-md-12">
			<h4 class="text-left"><strong>Duracion:</strong>&nbsp{$i.duracion}</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<h4 class="text-left"><strong>Precio</strong>:&nbsp{$i.precio}</h4>
			</div>
		</div>

		<div class="row">	
			<div class="col-md-12">
			<h4 class="text-left"><strong>Descripcion:</strong>&nbsp{$i.descripcion}</h4>
			</div>
		</div>
	{/foreach}
		<!-- Fin Sucategoria -->
</div>

{include file="incluye.tpl"}