{include file="header.tpl"}
  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                <li class="active">
                    <a href="#"><i class="fa fa-home fa-2x" ></i></a>
                </li>
                {foreach from=$Categorias item=categorias}                 
                <li><a href="home.php?#id_categoria={$categorias.id_categoria}">
                    {$categorias.nombre_categoria}
                    </a>
                </li>
                {/foreach}
              </ul>
            </div>
          </div>      

          <div class="mastfoot">
          <div class="row">
              <div class="col-md-12 ">
                <a href="https://www.twitter.com/">
                  <i class="fa fa-twitter-square fa-3x" ></i>&nbsp&nbsp
                </a>
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook-square fa-3x"></i>&nbsp&nbsp
                </a>
                <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram fa-3x"></i>&nbsp&nbsp
                </a>
                <a href="https://www.youtube.com/">
                  <i class="fa fa-youtube-square fa-3x"></i>&nbsp&nbsp
                </a>
              </div>
              </br>
                <a href="#tuparvt">
                  <i class="fa fa-chevron-down fa-2x"></i>
                </a>    
          </div>
            <div class="inner">
              <p>Tupar Viajes y Turismo - <a href="#">Copyright 2014</a>.</p>
            </div>
        </div>
      </div>
    </div>
</div>

<div id="tuparvt" class="container bs-docs-container">
<!-- Subcategoria-->
  <div class="row">
    <div class="col-md-12" role="main">
      <div class="bs-docs-section">
        {foreach from=$Contenido item=i}
        <h1 id="{$i.id_categoria}">{$i.nombre_subcategoria}</h1></br></br>
        <h4 class="text-center">{$i.descripcion}<h4></br></br>
      </div>
        {/foreach}
    </div>
  </div>
<!-- Fin Subcategoria-->      
</div>
{include file="footer.tpl"} 