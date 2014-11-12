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
          <div class="col-lg-9">
          </div>
          <div class="col-lg-2">                        
           {if isset($Mail)}
           <h4><strong>Conectado como:</strong><p class="text-success">{$Mail}</p></h4>           
          {/if}
          </div>
          <div class="col-lg-1">
          <button id="logout" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Salir">
              <span class="glyphicon glyphicon-log-out">&nbsp&nbsp</span>
            </button>
          </div>
        </div>   

        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Condicion del turista
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">

                     <div class="tab-pane fade active in" id="home">
                        <form  id="formcondicion" class="form-horizontal" method="post" action="">
                          <fieldset>
                            <legend>Condicion del turista</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Condicion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="condicion" placeholder="Condicion para categorizar a un turista" name="condicion" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <input id="btncrearcondicion" type="submit" class="btn btn-primary" value="Crear">&nbsp;&nbsp;
                                <input id="botoncrearciudad" type="reset" class="btn btn-default" value="Limpiar">

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
