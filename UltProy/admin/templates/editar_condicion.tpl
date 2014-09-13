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
                    <li class="active"><a href="#home" data-toggle="tab">Ciudades
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form class="form-horizontal" method="POST"> 
                          {foreach from=$Ciudad item=ciudad}
                          <fieldset>
                            <legend>Ciudad</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                              <div class="col-lg-10">
                                {foreach from=$Nombreciudad item=nombreciudad}
                                <select class="form-control" name="ciudad" >
                                  <option value="">{$nombreciudad.nombre_ciudad}</option>
                                  {/foreach} 
                                </select>
                                 
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Duracion" name="duracion"
                                value="{$ciudad.duracion}">
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Precio" name="precio"
                                value="{$ciudad.precio}">
                              </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"></label>
                              <div class="col-lg-10">
                                <input type="hidden" class="form-control" id="inputEmail" placeholder="Nombre" name="id_ciudad" 
                                value="{$ciudad.id_ciudad}">
                              </div>
                            </div>
                            </div>                                         
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Editar</button>
                              </div>
                            </div>
                          </fieldset>
                          {/foreach}
                        </form>                        
                    </div>
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
{include file="footer.tpl"}