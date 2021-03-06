                  <!-- CAROUSEL-->
                  {foreach from=$Ciudad item=ciudad}
                  <div class="row">
                    
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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
                        
                  <div class="  row">                                    
                    <div class="col-lg-4  text-center">                      
                      <h3>Lugar<h3><h4>{$ciudad.nombre_ciudad}</h4>
                      </div>
                      <div class="col-lg-4  text-center">
                        <h3>Precio</h3><h4>$&nbsp;{$ciudad.precio}</h4>
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
                              <button type="button" class="btn btn-primary" onClick="getComentarioCiudad({$ciudad.id_ciudad})">
                              <i class="fa fa-comments fa-3x"></i>&nbsp;
                              </button><br>
                              <small>
                                {if !isset($Nombre)}
                                <em>* Si desea dejar su comentario debera   registrarse primero.
                                </em>
                                {/if}
                              </small>
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

                      <!-- CAROUSEL CICLICO-->                                    
                      <script type="text/javascript">
                      
                        $('.carousel').carousel({
                          interval: 2800
                        })
                        
                        $('.carousel').carousel({
                          pause: "hover"
                        })
                      </script>
                      <!-- FIN CAROUSEL CICLICO-->                                    