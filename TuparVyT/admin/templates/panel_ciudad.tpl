                {foreach from=$Ciudad item=ciudad}
                  <tr class="active danger">
                    <td>{$ciudad.id_ciudad}</td>
                    <td>{$ciudad.nombre_ciudad}</td>
                    <td>{$ciudad.duracion}</td>
                    <td>$&nbsp;{$ciudad.precio}</td>
                    <td>
                      <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                      </a>

                      <a data-toggle="tooltip" data-placement="top" title="Para eliminar una ciudad haga click en el icono" style="cursor:pointer">
                        <span  onclick="BorrarCiudad({$ciudad.id_ciudad});"
                               class=" glyphicon glyphicon-trash ">
                        </span>
                      </a><br>
                    </td>
                  </tr>
                  {/foreach}