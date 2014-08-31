{include file="header.tpl"}
  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                {foreach from=$Categorias item=categorias}
                  {if {$categorias.id_categoria} eq '1'}
                    <li class="active">
                    <a href="javascript:GetSubCategoria({$categorias.id_categoria_padre})">
                    <i class="fa fa-home fa-2x" ></i></a>                      
                  {/if}
                    </li>
                    <li>
                      <a href="javascript:GetSubCategoria({$categorias.id_categoria_padre});">
                      {$categorias.nombre_categoria}</a>
                    </li>
                {/foreach}
              </ul>
            </div>
          </div>      

          <div class="mastfoot">
          <div class="row">  
          <div class="col-md-12">
          </div>
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
              <a href="https://www.twitter.com/">
                  <i class="fa fa-twitter-square fa-3x" ></i>&nbsp&nbsp
              </a>
              <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook-square fa-3x"></i>&nbsp&nbsp
              </a>
              <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram fa-3x"></i>&nbsp&nbsp
              </a>
              <a>
              <a href="https://www.youtube.com/">
                  <i class="fa fa-youtube-square fa-3x"></i>&nbsp&nbsp
              </a>
              </div>
            </div>       
            <a class="back-to-top" >
           <i class="fa fa-arrow-circle-down fa-2x"></i>
        
      </div>
            <div class="inner">
              <p>Tupar Viajes y Turismo - <a href="#">Copyright 2014</a>.</p>
            </div>

          </div>

        </div>

      </div>
    </div>

    <!--En este div es donde se colococa el contenido que se trae con Ajax!-->
      
      <div id="contenido" class="container bs-docs-container">

      
      </div>      
{include file="footer.tpl"}