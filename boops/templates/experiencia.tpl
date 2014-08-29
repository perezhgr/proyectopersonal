<div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
          {foreach from=$Subcategoria item=i}
              <h1 >{$i.nombre_categoria}</h1></br>
                  <h4>{$i.descripcion}<h4><br>
           {/foreach}    
        </div>              
      </div>              
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    {foreach from=$Imagen item=i}
    <div class="bs-example">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner">

        <div class="item active">
        
          <img src="{$i.path}" alt="First slide image">
          <div class="carousel-caption">
            <h3>{$i.nombre_ciudad}</h3>  
          </div>
        </div>

        
      </div>{/foreach}
      
      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
    </div>
      
    </div>
    <div class="col-md-3">
    </div>
</div></br></br></br>

<div class="row">
    <div class="col-md-12">
    <table class="table table-hover">
    <h4>Comentarios de nuestros viajeros</h4></br>
    <thead>
      <tr>
         <th></th>
         <th></th>
         <th></th>
         <th></th>
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
      </tr>
   {/foreach}   
   </tbody>
   </table>
   <hr>
   </div>
</div>