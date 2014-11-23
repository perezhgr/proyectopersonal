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
          <form id="formciudad" class="form-horizontal" method="POST" enctype="multipart/form-data" >
            <fieldset>
              <legend>Ciudad</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-10">
                  <input id="ciudad" type="text" class="form-control" placeholder="Nombre" name="ciudad" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                <div class="col-lg-10">
                  <input id="duracion" type="text" class="form-control" placeholder="Duracion" name="duracion" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                <div class="col-lg-10">
                  <input id="precio" type="text" class="form-control" placeholder="Precio" name="precio" >
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Eliga imagenes</label>

              <!--DIV QUE CONTIENE A LOS BOTONES PARA CARGAR IMAGENES-->
                
                <div class="col-lg-4 centered">
                  <span class="btn btn-default btn-file">
                    <i class="fa fa-picture-o fa-2x"></i>
                    <input id="img1" type="file" name="imagen0" onchange="PreviewImage();" /> </span>

                    <span class="btn btn-default btn-file">
                      <i class="fa fa-picture-o fa-2x"></i>
                      <input id="img2" type="file" name="imagen1" onchange="PreviewImage2();" />
                    </span>

                    <span class="btn btn-default btn-file">
                      <i class="fa fa-picture-o fa-2x"></i>
                      <input id="img3" type="file" name="imagen2" onchange="PreviewImage3();" /></span><br>
                    </div>    
              </div>    
              <!--DIV QUE CONTIENE A LOS BOTONES PARA CARGAR IMAGENES->

              <!--DIV QUE CONTIENE A LAS IMAGENES-->
              <div class="form-group">

                <div class="col-lg-4">
                  <img class="img-thumbnail" id="uploadPreview" style="width: 300px; height: 200px;" /><br><br>

                </div>
                <div class="col-lg-4 ">
                  <img class="img-thumbnail" id="uploadPreview2" style="width: 300px; height: 200px;" /><br><br>
                
                </div>
                <div class="col-lg-4 ">
                  <img class="img-thumbnail" id="uploadPreview3" style="width: 300px; height: 200px;" /><br><br>

                </div>  
                <script type="text/javascript">

                </script>
              </div>
              <!--FIN DIV QUE CONTIENE A LAS IMAGENES-->
              <br>
            </fieldset>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <input id="botoncrearciudad" type="submit" class="btn btn-primary" value="Crear">&nbsp;&nbsp;
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-1"></div>
  </div>
  {include file="footer.tpl"}