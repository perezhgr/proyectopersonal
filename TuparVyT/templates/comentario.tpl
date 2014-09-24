                  <!-- COMENTARIO-->
                    {foreach from=$Comentario item=comentario}
                      <p class="text-left">{$comentario.nombre} ({$comentario.condicion}) dijo:<br>
                      <br>
                      {$comentario.texto}</p><br>
                    {/foreach}