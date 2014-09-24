                    {foreach from=$Ciudad item=ciudad}
                    <div class="col-sm- text-center">
                      <p>Lugar:{$ciudad.nombre_ciudad}</p><br>
                      <p>Precio:{$ciudad.precio}</p><br>
                      <p>Duracion:{$ciudad.duracion}</p><br>
                    </div>
                    {/foreach}
                    

