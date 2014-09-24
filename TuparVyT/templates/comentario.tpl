                  <!-- COMENTARIO-->

                  <address>
                    {foreach from=$Comentario item=comentario}
                    <div class="jumbotron text-left"><strong>{$comentario.nombre} ({$comentario.condicion})</strong> dijo:<br>
                      •&nbsp;<em>{$comentario.texto}</em>
                    </div><br>
                    {/foreach}
                  </address>


                  <form class="form-horizontal" ACTION="" METHOD="POST">        
                    <fieldset>                        
                      <div class="form-group">                          
                        <div class="col-lg-6">
                          <div class="jumbotron">
                            <label>Compartenos tu experiencia en esta ciudad...</label>
                            <textarea class="form-control" rows="5" type="text" name="texto" placeholder="Escriba su comentario..."></textarea><br>
                            <button type="submit" class="btn btn-success btn-md">Publicar</button>                            
                          </div>
                        </div>
                      </div>                      
                    </fieldset>
                  </form>
