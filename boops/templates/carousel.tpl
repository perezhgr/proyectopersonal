<div class="row">
<div class="col-md-12">
{foreach $CollecionImagen as $image key=slider}
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="{if $image.id_imagen@first}active{/if}"></li>         
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner">

      {if $slider < 1} 
    <div class="item{if $image.id_imagen@first}active{/if}">  
      <img src="{$image.path}" alt="...">
      <div class="carousel-caption">
        
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
    {else}
    <div class="item">
      <img src="{$image.path}" alt="...">
      <div class="carousel-caption">
        
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
    {/if}{/foreach}
    ...
  </div>

</div>
</div>
caro