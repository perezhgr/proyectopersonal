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
            <li class="active"><a href="#home" data-toggle="tab">Ciudades
            </a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">
              <form  id="formciudad" class="form-horizontal" method="POST" enctype="multipart/form-data" > 

                <fieldset>
                  <legend>Ciudad</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                    <div class="col-lg-10">
                      <input id="1" type="text" class="form-control" placeholder="Nombre" name="ciudad" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                    <div class="col-lg-10">
                      <input id="2" type="text" class="form-control"  placeholder="Duracion" name="duracion" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                    <div class="col-lg-10">
                      <input id="3" stype="text" class="form-control"  placeholder="Precio" name="precio" required>
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputPassword" class="col-lg-2 control-label">Eliga imagenes</label>&nbsp;&nbsp;&nbsp;&nbsp;
                   <span class="btn btn-default btn-file">
                    <i class="fa fa-picture-o fa-2x"></i><input type="file" name="imagen0">
                  </span>&nbsp;&nbsp;&nbsp;
                  <span class="btn btn-default btn-file">
                    <i class="fa fa-picture-o fa-2x"></i><input type="file" name="imagen1">
                  </span>&nbsp;&nbsp;&nbsp;
                  <span class="btn btn-default btn-file">
                    <i class="fa fa-picture-o fa-2x"></i><input type="file" name="imagen2">
                  </span>
                </div><br>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" class="btn btn-primary" value="Crear">
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