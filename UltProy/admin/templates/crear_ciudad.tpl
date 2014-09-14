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
                        <form class="form-horizontal" method="POST" ENCTYPE="multipart/form-data"> 
                          <fieldset>
                            <legend>Ciudad</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre" name="ciudad">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Duracion" name="duracion">
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Precio" name="precio">
                              </div>
                            </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label">Agregar Imagen 1</label>
                             <input type="file" class="filestyle" name="imagen0">
                           </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label">Agregar Imagen 2</label>
                             <input type="file" class="filestyle" name="imagen1">
                           </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label">Agregar Imagen 3</label>
                             <input type="file" class="filestyle" name="imagen2">
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