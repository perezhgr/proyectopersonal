                        {foreach from=$Usuario item=usuario}
                          <tr class="active danger">
                            <td>{$usuario.id_usuario}</td>
                            <td>{$usuario.nombre}</td>
                            <td>{$usuario.mail}</td>                           
                            <td>
                            {if $usuario.es_admin ==1}
                              <p class="text-center"><span class=" glyphicon glyphicon-ok"></span>
                              </a></p>
                            {else}  
                            <p class="text-center">
                            <a data-toggle="tooltip" data-placement="top" title="Cambie los previlegios de un usuario haciendo click aqui" style="cursor:pointer">
                            <span  onclick="PromoverUsuario({$usuario.id_usuario});" class="glyphicon glyphicon-remove"></span>
                            </a></p>
                            {/if}
                            </td>  
                            <td>
                            <a data-toggle="tooltip" data-placement="top" title="Elimine un usuario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarUsuario({$usuario.id_usuario});" class="glyphicon glyphicon-trash"></span>
                            </a>
                            </td> 
                          </tr>
                          {/foreach}