                  {foreach from=$Ciudad item=ciudad}
                  <tr class="active danger">
                    <td>{$ciudad.id_ciudad}</td>
                    <td>{$ciudad.nombre_ciudad}</td>
                    <td>{$ciudad.duracion}</td>
                    <td>{$ciudad.precio}</td>
                    <td>
                      <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                      </a>

                      <a style="cursor:pointer">
                        <span  onclick="BorrarCiudad({$ciudad.id_ciudad})"
                               class=" glyphicon glyphicon-trash ">
                        </span>
                      </a><br>
                          <a id="pop" 
        href="#" 
        class="btn btn-lg btn-danger" 
        data-toggle="popover" 
        data-content="And here's some amazing content. It's very engaging. right?"
    >Hover to toggle popover</a>
                    </td>
                  </tr>                                              
                  {/foreach}