                  {foreach from=$Ciudad item=ciudad}
                  <tr class="active danger">
                    <td>{$ciudad.id_ciudad}</td>
                    <td>{$ciudad.nombre_ciudad}</td>
                    <td>{$ciudad.duracion}</td>
                    <td>{$ciudad.precio}</td>
                    <td>
                      <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                      </a>
                      <a data-href="" data-toggle="modal" data-target="#confirm-delete" href="#"><span class="glyphicon glyphicon-trash"></span></a><br>
                    </td>
                  </tr>                                              
                  {/foreach}