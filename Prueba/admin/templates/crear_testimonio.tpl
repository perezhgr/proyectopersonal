{include file="header.tpl"}
  <body>

    <div class="container">

      <!-- Typography
      ================================================== -->
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h2 class="text-center">Administracion del Sitio Tupar VyT</h2>
            </div>
          </div>
        </div>

      <!-- Forms
      ================================================== -->
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Testimonios
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form class="form-horizontal">
                          <fieldset>
                            <legend>Testimonios</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Persona</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre de persona" name="persona">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="select" class="col-lg-2 control-label">Condicion</label>
                              <div class="col-lg-10">
                                <select class="form-control" name="id_condicion" >
                                {foreach from=$Condicion item=condicion}    
                                  <option value="{$condicion.id_condicion}">{$condicion.condicion}</option>
                                  {/foreach}
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="select" class="col-lg-2 control-label">Ciudad que deseas comentar</label>
                              <div class="col-lg-10">
                                <select class="form-control" id="select" name="id_ciudad" >
                                  {foreach from=$Ciudad item=ciudad}  
                                  <option value="{$ciudad.id_ciudad}">{$ciudad.nombre_ciudad}</option>
                                  {/foreach}
                                </select>
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Fecha</label>
                              <div class="col-lg-10">
                                <input type="date" class="form-control" id="inputPassword" placeholder="Fecha del viaje (aaaa-mm-dd)" name="fecha">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Comentario</label>
                              <div class="col-lg-10">
                                <textarea type="text" rows="6" class="form-control" id="texto"  placeholder="Escriba un comentario" name="comentario"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Crear</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>                        
                    </div>
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
{include file="footer.tpl"}
