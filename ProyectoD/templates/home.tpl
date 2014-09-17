{include file="header.tpl"}
    <body>
      <div id="top" class="site-wrapper">

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
              <h1 class="cover-heading w">Tupar Viajes y Turismo</h1>
              <p class="lead s">Tu sueño hecho realidad...</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-1x"></i>&nbsp;</a>
              </p>
              <!-- FORM PARA LOGIN -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title" id="myModalLabel">Inicia sesion</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal" ACTION="" METHOD="POST">        
                        <fieldset>

                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="inputPassword" placeholder="Mail" name="mail">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                              <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                            <button type="submit" data-toggle="tooltip" data-placement="left" title="Iniciar sesion" class="btn btn-primary btn-md btn-block"><i class="fa fa-sign-in fa-2x"></i>&nbsp;</button>

                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIN FORM PARA LOGIN -->

          <!--FORM PARA REGISTRARSE -->
          <form class="form-horizontal" ACTION="" METHOD="POST">        
            <fieldset>
              <div class="form-group">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" id="inputPassword" placeholder="Nombre" name="nombre">
                </div>
              </div>
              <div class="form-group">
              <div class="col-lg-4"></div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" id="inputPassword" placeholder="Mail" name="mail">
                </div>
              </div>
              <div class="form-group">
              <div class="col-lg-4"></div>
                <div class="col-lg-4">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
                </div>
              </div>

            <div class="form-group">
              <div class="col-lg-4"></div>
              <div class="col-lg-1">
              <button type="submit" data-toggle="tooltip" data-placement="left" title="Registrate" class="btn btn-success btn-md"><i class="fa fa-sign-in fa-2x"></i>&nbsp;</button>
                
              </div>
            </div>
          </fieldset>
        </form><br><br>
        <!--FIN FORM PARA REGISTRARSE -->

            <div class="mastfoot">
            <div class="inner">
              <p><a href="http://fb.com"><i class="fa fa-facebook fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
              &nbsp&nbsp
              <a href="https://youtube.com"><i class="fa fa-youtube-square fa-2x"></i></a>&nbsp&nbsp
              <a href="https://instagram.com"><i class="fa fa-instagram fa-2x"></i></a><br><br>

              <a href="#empresa" class="sr-button sr-buttonicon small-iconbutton" title="Back to Top">
              <i class="fa fa-angle-double-down fa-3x"></i></a>
              </p>
            </div>
          </div>
          </div>

        </div>

      </div><br><br><br><br><br>

      <div class="container marketing">
        <div class="row">
          <h2 id="empresa">Nuestro servicio</h2><br><br>
          {foreach $Empresa as $empresa name=emp}
          {if $smarty.foreach.emp.iteration !== 4}
          <div class="col-lg-6">
          <img class="img-circle" src="{$empresa.path}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h3>{$empresa.titulo}</h3><br>
            <p class="text-justify">{$empresa.cuerpo}</p>
          </div>
          {else}
          <div class="col-lg-12">
          <img class="img-circle" src="{$empresa.path}" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h3>{$empresa.titulo}</h3><br>
            <p class="text-justify">{$empresa.cuerpo}</p>
          </div>
          {/if}
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
        <h4 class="text-center">Estaríamos encantados de proporcionarle con más información ,<br> sólo tiene que llamar , correo electrónico o visítenos</h4><br><br>
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
        </div><br>
        <div class="row">

          <div class="col-lg-4">

            <h4 class="text-justify">Tupar VyT</h4><br>

            <p class="text-justify">Oficina Tupar VyT<br><br>


            <i class="fa fa-road fa-2x"></i>&nbsp&nbsp25 de mayo 268<br><br>
            <i class="fa fa-building fa-2x"></i>&nbsp&nbspTandil 7000<br><br>
            <i class="fa fa-map-marker fa-2x"></i>&nbsp&nbsp&nbsp&nbspArgentina<br><br>
            <i class="fa fa-phone fa-2x"></i>&nbsp&nbsp+54 249 422 0494<br><br>
            <i class="fa fa-envelope fa-2x"></i>&nbsp&nbsptuparvyt@gmail.com<br><br>
            <i class="fa fa-desktop fa-2x"></i>&nbsp&nbspwww.tuparvyt.com</p>

          </div>
        </div>
      </div>    
     </div><br><br><br><br><br><br>
{include file="footer.tpl"}