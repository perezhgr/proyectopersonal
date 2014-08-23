{include file="header.tpl"}
  <body>
    <div id="top" class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" >Tupar viajes y turismo</h1>
              <ul class="nav masthead-nav">
                {foreach from=$Secciones item=secciones}
                  {if {$secciones.id_seccion} eq '1'}
                    <li class="active">
                    <a href="javascript:GetCategoria({$secciones.id_seccion});">
                    <i class="fa fa-home fa-2x" ></i>                      
                  {/if}
                    </li>
                    <li>
                      <a href="javascript:GetCategoria({$secciones.id_seccion});">
                      {$secciones.nombre_seccion}</a>
                    </li>
                {/foreach}
              </ul>
            </div>
          </div>      

          <div class="mastfoot">
          <div class="row">  
          <div class="col-md-12">
          <form class="navbar-form navbar-right" role="form"><br>
            <div class="form-group">
              <input class="input" type="text" placeholder="Email" class="form-control" size="30">
            </div>
            <div class="form-group">
              <input class="input"type="password" placeholder="Contraseña" class="form-control" size="30">
            </div>
            <button class="boton" type="submit" class="btn btn-success"><font color="#262626">Iniciar</font></button>
          </form>
          </div>
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
               <i class="fa fa-twitter-square fa-3x" ></i>&nbsp&nbsp
               <i class="fa fa-facebook-square fa-3x"></i>&nbsp&nbsp
               <i class="fa fa-instagram fa-3x"></i>&nbsp&nbsp
               <i class="fa fa-youtube-square fa-3x"></i>&nbsp&nbsp
              </div>
            </div>                      
        
      </div>
            <div class="inner">
              <p>Tupar Viajes y Turismo - <a href="#">Copyright 2014</a>.</p>
            </div>

          </div>

        </div>

      </div>
    </div>
      
      <div id="contenido" class="container bs-docs-container">
      
      </div>      
{include file="footer.tpl"}