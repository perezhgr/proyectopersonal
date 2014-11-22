            {foreach from=$Testimonio item=testimonio}
                  <tr class="active danger">
                    <td>{$testimonio.id_comentario}</td>
                    <td>{$testimonio.nombre}</td>
                    <td>{$testimonio.condicion}</td>
                    <td>{$testimonio.texto}</td>
                    <td>{$testimonio.nombre_ciudad}</td>
                    <td>
                      <a data-toggle="tooltip" data-placement="top" title="Elimine un comentario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarComentario({$testimonio.id_comentario});" class="glyphicon glyphicon-trash"></span>
                      </a>
                    </td>
                  </tr>
              {/foreach}