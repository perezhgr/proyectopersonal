{include file="header.tpl"}
    <body>
      <div class="site-wrapper">

        <div class="site-wrapper-inner ">

          <div class="cover-container ">

            <div class=" masthead clearfix ">
              <div class="inner ">
                <h3 class="masthead-brand"></h3>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#empresa">Acerca</a></li>
                  <li><a href="#paquetes">Paquetes</a></li>
                  <li><a href="#contacto">Contacto</a></li>
                </ul>
              </div>
            </div>

            <div class="inner cover ">
              <h1 class="cover-heading ">Tupar VyT</h1>
              <p class="lead">Tu sueño haecho realidad</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg"  data-toggle="modal2" data-target="
                .bs-example-modal-lg" role="button">Inicia sesion&raquo;</a>
                <a class="btn btn-success btn-lg"  data-toggle="modal3" data-target=".bs-example-modal-lg" role="button">Registrate&raquo;</a>
              </p>

            </div>
            <div class="mastfoot">
            <div class="inner">
              <p><a href="http://fb.com"><i class="fa fa-facebook fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://youtube.com"><i class="fa fa-youtube-square fa-2x"></i></a>&nbsp&nbsp
              <a href="https://instagram.com"><i class="fa fa-instagram fa-2x"></i></a>
              </p>
            </div>
          </div>
          </div>

        </div>

      </div><br><br><br><br><br>

      <div class="container marketing">
        <div class="row">
          <h2 id="empresa">Nuestro servicio</h2><br><br>
          {foreach from=$Empresa item=empresa}
          <div class="col-lg-6">
            <h3>{$empresa.titulo}</h3><br>
            <p class="text-justify">{$empresa.cuerpo}</p>
          </div>
          {/foreach}
        </div><br><br><br><br><br><br><br><br>

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h2 id="paquetes">Paquetes</h2><br><br>
            {foreach from=$Ciudades item=ciudad}
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <a href="#">
             <img src="{$ciudad.path}" class="img-rounded img-responsive"  data-toggle="tooltip" data-placement="left" title="{$ciudad.nombre_ciudad}">
           </a>
           <p>
            <h3>{$ciudad.nombre_ciudad}</h3>
            <a class="btn btn-primary "  data-toggle="modal" data-target=".bs-example-modal-lg" role="button" href="javascript:getDetalleCiudad({$ciudad.id_ciudad})">Ver mas &raquo;</a>
          </p>
         </div>
         {/foreach}
         <div id="contenido"></div>
         <!-- /.col-lg-4 -->
       </div><br><br><br><br><br><br><br><br><!-- /.row -->

       <div class="row">
       <h2 id="contacto">Envienos su consulta</h2><br><br>
        <div class="col-lg-8">
        <h4>Estaríamos encantados de proporcionarle con más información , sólo tiene que llamar , correo electrónico o visítenos</h4><br><br>
        <form class="form-horizontal" ACTION="" METHOD="POST">        
            <fieldset>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label"
                name="asunto">Asunto</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="inputPassword" placeholder="Asunto" name="asunto">
                </div>
              </div>
              <div class="form-group">
               <label for="inputText" class="col-lg-2 control-label">Mensaje</label>
               <div class="col-lg-8  control-label">
                <textarea class="form-control" rows="8" type="text" name="texto" placeholder="Escriba su mensaje"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
              <button type="submit" class="btn btn-primary btn-md btn-block"><i class="fa fa-paper-plane fa-1x"></i></button>
                
              </div>
            </div>
          </fieldset>
        </form>
        </div><br><br><br><br><br>
        <div class="row">

          <div class="col-lg-4">

            <p class="text-justify">Bee In Touch<br><br>

            To find out more about what we can do for you, request some more examples of our work, or arrange a meeting, please don't hesitate to get in touch.<br><br>
            Oficina Tupar VyT<br><br>

            25 de mayo 268<br>
            Tandil 7000<br>
            Argentina<br><br><br>

            +54 249 422 0494<br>
            tuparvyt@gmail.com<br></p>
          </div>
        </div>
      </div>    
     </div><br><br><br><br><br><br>
{include file="footer.tpl"}