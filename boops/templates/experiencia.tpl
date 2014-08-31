<!-- Sucategoria -->
<div class="row">
  <div class="col-md-12" role="main">
    <div class="bs-docs-section">
      {foreach from=$Subcategoria item=i}
      <h1 >{$i.nombre_categoria}</h1></br>
      <h4>{$i.descripcion}<h4><br>
       {/foreach}    
     </div>              
   </div>              
 </div></br></br>
 <!-- Fin Sucategoria -->

<!-- Carousel -->
<div class="row" id="lugar">
  <div class="col-md-10">
   <div id="myCarousel" class="carousel">
    <div class=""carousel-inner>
      <div class="item active">
        {foreach from=$Imagen item=img}
        <div style="height:30%; width:30%; float: left; margin-right: 10px;">
        <a href="#tabla">
        <img alt="320x240" src="{$img.path}" class="img-thumbnail" data-toggle="tooltip" data-placement="top" title="{$img.nombre_ciudad}"/></a>  
        </div>        
        {/foreach}
      </div> 
    </div>    
   </div>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-shopping-cart fa-2x"></i>
    </button>
  </div>
</div></br></br></br></br>
<!-- Fin de carousel -->

<!-- Tabla con los comentarios -->
<div class="row">
  <div class="col-md-12">

    <table class="table table-hover">
      <h4>Comentarios de nuestros viajeros</h4></br>
      <thead id="tabla">
        <tr>
         <th></th>
         <th class="text-center"><i class="fa fa-male fa-2x"></i></i></th>
         <th class="text-center"><i class="fa fa-calendar fa-2x"></i></th>
         <th class="text-center"><i class="fa fa-comments fa-2x"></i></th>
         <th class="text-center"><i class="fa fa-eye fa-2x"></i></th>         
         
         <th data-field="price" data-sortable="true" data-sorter="priceSorter"class="text-center"><i class="fa fa-map-marker fa-2x"></i>
         </th>         
       </tr>
     </thead>
     <tbody>
      {foreach from=$Experiencia item=i }
      <tr>
       <td><i class="fa fa-check"></i></td> 
       <td>{$i.nombre_persona}</td>
       <td>{$i.fecha}</td>
       <td>{$i.texto}</td>
       <td>{$i.condicion}</td>
       <td>{$i.nombre_ciudad}</td>
     </tr>
     {/foreach}   
   </tbody>
 </table>
</div>
</div>
<hr>
</br></br></br></br>
<!-- Fin tabla -->