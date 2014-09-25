                  <!-- CAROUSEL-->
                  {foreach from=$Ciudad item=ciudad}
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
                        {foreach $Imagen as $imagen name=img}
                        
                          <div class="item {if $smarty.foreach.img.iteration == 1} active{/if}">

                            <img src="{$imagen.path}" alt="" class="img-responsive img-thumbnail" width="300px" height="300px">
                            <div class="carousel-caption">
                              <h3>{$ciudad.nombre_ciudad}</h3>
                            </div>
                          </div>                          
                          {/foreach}   
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
                    <div class="col-lg-4  text-center">                      
                      <h3>Lugar<h3><h4>{$ciudad.nombre_ciudad}</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Precio</h3><h4>{$ciudad.precio}</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Duracion</h3><h4>{$ciudad.duracion}</h4>
                      </div>
                  </div>
                      <!-- FIN DATOS CIUDAD-->                  

                      <!-- COMENTARIOS-->                  
                      <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                          <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                              {foreach from =$Comentario item=comentario}
                              <button type="button" class="btn btn-primary" onClick="getComentarioCiudad({$ciudad.id_ciudad})">
                                <span class="badge pull-right">{$comentario.comentarios}</span>
                                Ver Comentarios&nbsp;
                              </button>
                              {/foreach}
                            </li><br><br>
                          </ul>
                          </div>
                        </div>
                      {/foreach}
                      <div class="row">
                      <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                          <div id="comentario"></div>
                        </div>
                        <div class="col-lg-1"></div>
                      </div>
                      <!-- FIN COMENTARIOS-->                  
