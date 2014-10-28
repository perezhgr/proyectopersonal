                        {foreach from=$Condicion item=condicion}
                          <tr class="active danger">
                            <td>{$condicion.id_condicion}</td>
                            <td>{$condicion.condicion}</td>
                            <td>
                              <a href="AM_condicion.php?id_condicion={$condicion.id_condicion}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a data-toggle="tooltip" data-placement="top" title="Elimine una condicion haciendo click aqui" style="cursor:pointer"><span onclick="BorrarCondicion({$condicion.id_condicion});" class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          {/foreach}