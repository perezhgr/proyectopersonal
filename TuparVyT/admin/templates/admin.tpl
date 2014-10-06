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
          <div class="col-lg-1">          
          </div>
          <div class="col-lg-10">
                <div  id="alerta">
                <div id="mensaje"></div>              
                </div>

                  <ul class="nav nav-tabs">
                    {foreach from=$Countcity item=i}
                    <li class="active"><a href="#ciudad" data-toggle="tab">Ciudades
                    <span class="badge"><div id="count">{$i.countcity}</div></span></a></li>
                    {/foreach}
                    
                    {foreach from=$Countcoment item=i}
                    <li><a href="#comentario" data-toggle="tab">Testimonios
                    <span class="badge">{$i.countcoment}</span></a></li>
                    {/foreach}
                    {foreach from=$Countcondicion item=i}                    
                    <li><a href="#condicion" data-toggle="tab">Condicion del turista
                    <span class="badge">{$i.countcondicion}</span></a></li>
                    {/foreach}
                    {foreach from=$Countuser item=i}                    
                    <li><a href="#usuario" data-toggle="tab">Usuarios
                    <span class="badge">{$i.countuser}</span></a></li>
                    {/foreach}
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="ciudad">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Ciudad</th>
                            <th>Duracion</th>
                            <th>Precio</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody id="TabCiudad">
                          {foreach from=$Ciudad item=ciudad}
                          <tr class="active danger">
                            <td>{$ciudad.id_ciudad}</td>
                            <td>{$ciudad.nombre_ciudad}</td>
                            <td>{$ciudad.duracion}</td>
                            <td>{$ciudad.precio}</td>
                            <td>
                              <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                               <a data-href="" data-toggle="modal" data-target="#delete" href="#"><span class="glyphicon glyphicon-trash"></span></a><br>
                            </td>
                          </tr>                                             
                          {/foreach}
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_ciudad.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="comentario">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Persona</th>
                            <th>Condicion</th>
                            <th>Texto</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          {foreach from=$Testimonio item=testimonio}
                          <tr class="active danger">
                            <td>{$testimonio.id_comentario}</td>
                            <td>{$testimonio.nombre}</td>
                            <td>{$testimonio.condicion}</td>
                            <td>{$testimonio.texto}</td>
                            <td>
                              <a href="borrar_comentario.php?id_comentario={$testimonio.id_comentario}"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          
                          {/foreach}
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table> 
                    </div>   
                    <div class="tab-pane fade" id="condicion">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>                            
                            <th>Condicion</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          {foreach from=$Condicion item=condicion}
                          <tr class="active danger">
                            <td>{$condicion.id_condicion}</td>
                            <td>{$condicion.condicion}</td>
                            <td>
                              <a href="AM_condicion.php?id_condicion={$condicion.id_condicion}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar_condicion.php?id_condicion={$condicion.id_condicion}"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          {/foreach}
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_condicion.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="usuario">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>                            
                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th class="text-center">¿Tiene previlegios de administrador?</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          {foreach from=$Usuario item=usuario}
                          <tr class="active danger">
                            <td>{$usuario.id_usuario}</td>
                            <td>{$usuario.nombre}</td>
                            <td>{$usuario.mail}</td>                           
                            <td>
                            {if $usuario.es_admin ==1}
                              <p class="text-center"><a href="editar_usuario.php?id_usuario={$usuario.id_usuario}"><span class=" glyphicon glyphicon-ok"></span>
                              </a></p>
                            {else}  
                            <p class="text-center"><a href="editar_usuario.php?id_usuario={$usuario.id_usuario}"><span class="glyphicon glyphicon-remove"></span>
                            </a></p>
                            {/if}
                            </td>  
                            <td>
                            <a href="borrar_usuario.php?id_usuario={$usuario.id_usuario}"><span class=" text-center glyphicon glyphicon-trash"></span>
                            </a>
                            </td> 
                          </tr>
                          {/foreach}
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table> 
                    </div> 
                  </div>
                  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                  </button>
                  <!--INICIO MODAL CERRAR--> 
                  <div class="modal fade" id="modal_emergente">
                    <div class="modal-dialog">
                      <div class="modal-content" id="modal_body">
                        <div class="modal-header">
                        <h4 class="modal-title">Eliminar Ciudad</h4>

                        </div>
                          <div class="modal-footer">
                            <div class="form-group">
                              <button type="button" id="boton_borrarep" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>    
                      <!--FIN MODAL CERRAR-->  
          </div>
          
          <div class="col-lg-1"></div>
        </div>
{include file="footer.tpl"}        