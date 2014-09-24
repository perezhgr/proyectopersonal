                  <!-- CAROUSEL-->
                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="img/berlin.jpg" alt="..." class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                          <div class="item">
                            <img src="img/berlin2.jpg" alt="..." class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                          <div class="item">
                            <img src="img/berlin2.jpg" alt="..."class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>Berlin</h3>
                            </div>
                          </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="icon-next"></span>
                        </a>
                      </div>
                    </div>                    
                  </div>
                  <!-- FIN CAROUSEL-->

                  <!-- DATOS CIUDAD-->
                  <div class="row">
                    {foreach from=$Ciudad item=ciudad}                      
                    <div class="col-lg-4  text-center">                      
                      <h3>Lugar<h3><h4>{$ciudad.nombre_ciudad}</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Precio</h3><h4>{$ciudad.precio}</h4><br>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Duracion<h3><h4>{$ciudad.duracion}</h4><br>
                        </div>
                        {/foreach}
                  </div>
                  <!-- FIN DATOS CIUDAD-->                  

                  <!-- COMENTARIOS-->                  
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                          <button type="button" class="btn btn-primary"onClick="getDetalleCiudad({$ciudad.id_ciudad})">
                            <span class="badge pull-right">12</span>
                            Ver Comentarios&nbsp;
                          </button>
                        </li>
                        ...
                      </ul>
                    </div>
                  </div> 
                  <!-- FIN COMENTARIOS-->                  
