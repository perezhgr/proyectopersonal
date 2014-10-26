                  {if isset($Nombre)}
                  <!-- FORM COMENTARIO-->
                  <div id="templateformcomentactualizado">
                  <form id="formcrearcomentario" class="form-horizontal" method="POST">        
                    <div class="jumbotron">
                      <h4>Deja tu comentario</h4><br>
                      <div class="form-group">
                        <div class="col-lg-6"><label>Escriba su comentario</label>
                          <textarea class="form-control" rows="3" type="text" name="texto" placeholder="Comentario..." required></textarea></div>
                          <div class="col-lg-6">
                           <label>Elija su condicion de turista</label><br>
                           <select  class="form-control" name="id_condicion">
                             {foreach from=$Condicion item=condicion}
                             <option value="{$condicion.id_condicion}">{$condicion.condicion}</option>
                             {/foreach}
                           </select><br> 
                         </div>
                         {foreach from=$IdCiudad item=idciudad}
                         <div class="col-lg-6">
                          <button type="submit" class="btn btn-primary btn-sm btn-block">
                            <i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-6">
                            <input type="hidden" class="form-control" name="id_usuario" value="{$IdUsuario}" required></div>
                            <div class="col-lg-6">

                              <input type="hidden" class="form-control" name="id_ciudad" value="{$idciudad.id_ciudad}" required>
                              {/foreach}                       
                            </div>
                          </div>  
                        </div>
                      </form>
                      {/if}
                      <!-- FIN FORM COMENTARIO-->

                      <script type="text/javascript">
                        $("#formcrearcomentario").submit(function() 
                        {
                          $.ajax({
                            url: "GrabarComentario.php",
                            type: "POST",
                            data:$("#formcrearcomentario").serialize(), 
                            success: function(data)
                            {

                              $('#templateformcomentactualizado').html(data);                      
                            }

                          });
                          return false;
                        });
                      </script>

                      <!-- LISTADO DE COMENTARIOS-->
                      <nav class="navbar navbar-default" role="navigation"> 
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            {foreach from=$Contador item=comentario}
                            <h4>Comentarios&nbsp;&nbsp;
                              <span class="label label-primary">{$comentario.countcoment}</span>
                          </h4>
                          {/foreach}
                        </div>
                      </nav>

                      <div class="scroll-area" data-spy="scroll" data-offset="0">
                        <address>
                          {foreach from=$Comentario item=comentario}
                          <div class="jumbotron text-left"><strong>{$comentario.nombre} ({$comentario.condicion})</strong> dijo:<br>
                            •&nbsp;<em>{$comentario.texto}</em>
                          </div><br>
                          {/foreach}                      
                        </address>

                        <hr>
                      </div>
                      </div>
                      <!-- LISTADO DE COMENTARIOS-->






