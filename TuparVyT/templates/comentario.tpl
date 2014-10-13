                  {if isset($Nombre)}
                  <!-- FORM COMENTARIO-->
                  <form class="form-horizontal" method="POST">        
                    <div class="jumbotron">
                    <h4>Deja tu comentario</h4><br>
                    <div class="form-group">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                        <label>Escriba su comentario</label>
                        <textarea class="form-control" rows="5" type="text" name="texto" placeholder="Comentario..." required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                          <input type="text" class="form-control" name="id_usuario" value="2" required>                        
                      </div>
                   </div>
                    <div class="form-group">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                        <label>Id city</label>
                        {foreach from=$IdCiudad item=idciudad}
                        <input type="text" class="form-control" name="id_ciudad" value="{$idciudad.id_ciudad}" required>
                        {/foreach}
                      </div>
                    </div>

                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <label>Elija su condicion de turista</label><br>
                         <select  class="form-control">
                         {foreach from=$Condicion item=condicion}
                          <option  name="id_condicion"  value="{$condicion.id_condicion}">{$condicion.condicion}</option>
                          {/foreach}
                        </select> 
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                          <a href="GrabarComentario.php"><button type="submit" class="btn btn-success btn-md">Publicar</button></a>
                        </div>
                      </div>
                    
                    </div>
                  </form>
                  {/if}
              <!-- FIN FORM COMENTARIO-->

               <!-- LISTADO DE COMENTARIOS-->
               <nav class="navbar navbar-default" role="navigation"> 
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <a class="navbar-brand" >Comentarios</a>
                  </div>
                </nav>
                
                <div class="scroll-area" data-spy="scroll" data-offset="0">
                  <address id="comentario">
                  </address>

                  <address>
                    {foreach from=$Comentario item=comentario}
                    <div class="jumbotron text-left"><strong>{$comentario.nombre} ({$comentario.condicion})</strong> dijo:<br>
                      •&nbsp;<em>{$comentario.texto}</em>
                    </div><br>
                    {/foreach}                      
                  </address>
                  <hr>

                </div>
                <!-- LISTADO DE COMENTARIOS-->






