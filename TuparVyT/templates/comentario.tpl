                  <!-- COMENTARIO-->
                  <address>
                    {foreach from=$Comentario item=comentario}
                    <div class="jumbotron text-left"><strong>{$comentario.nombre} ({$comentario.condicion})</strong> dijo:<br>
                      •&nbsp;<em>{$comentario.texto}</em>
                    </div><br>
                    {/foreach}
                  </address>

                  <!-- COMENTARIO
                  <form class="form-horizontal" ACTION="" METHOD="POST">        
                    <div class="jumbotron">
                    <h4>Deja tu comentario</h4><br>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <label>Elija su condicion de turista</label><br>
                         <select  class="form-control">
                         {foreach from=$Condicion item=condicion}
                          <option value="{$condicion.id_condicion}">{$condicion.condicion}</option>
                          {/foreach}
                        </select> 
                        </div>
                      </div>
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
                        <label>Id city</label>
                          <input type="text" class="form-control" name="" value="{$comentario.id_ciudad}" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                          <button type="submit" class="btn btn-success btn-md">Publicar</button>                            
                        </div>
                      </div>
                    
                    </div>
                  </form>!-->
