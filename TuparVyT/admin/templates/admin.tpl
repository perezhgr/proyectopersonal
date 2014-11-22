{include file="header.tpl"}
<body >
  <div class="container">
<!-- Typography
  ================================================== -->
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h2 class="text-center">Administracion del Sitio Tupar VyT</h2>
      </div>
    </div>
  </div>
<!-- Forms
  ================================================== -->
  <div class="row">
    <div class="col-lg-9">
    </div>
    <div class="col-lg-2">
      {if isset($Mail)}
      <h4><strong>Conectado como:</strong><p class="text-success">{$Mail}</p></h4>
      {/if}
    </div>
    <div class="col-lg-1">
      <button id="logout" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Salir">
        <span class="glyphicon glyphicon-log-out">&nbsp&nbsp</span>
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#ciudad" data-toggle="tab">Ciudades</a>
        </li>
        <li><a href="#comentario" data-toggle="tab">Testimonios</a></li>
        <li><a href="#condicion" data-toggle="tab">Condicion del turista</a></li>
        <li><a href="#usuario" data-toggle="tab">Usuarios</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active in" id="ciudad">
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Ciudad</th>
                <th>Duracion</th>
                <th>Precio</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody id="TabCiudad">
              {foreach from=$Ciudad item=ciudad}
              <tr class="active danger">
                <td>{$ciudad.id_ciudad}</td>
                <td>{$ciudad.nombre_ciudad}</td>
                <td>{$ciudad.duracion}</td>
                <td>$&nbsp;{$ciudad.precio}</td>
                <td>
                  <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                  </a>
                  <a style="cursor:pointer">
                    <span onclick="BorrarCiudad({$ciudad.id_ciudad});" class="glyphicon glyphicon-trash ">
                    </span>
                  </a><br>
                </td>
              </tr>
              {/foreach}
            </tbody>
            <tfoot>
              <td>
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="tooltip" data-placement="top" title="Cree una nueva ciudad" href="AM_ciudad.php">Crear</span></a></li>
                </ul>
              </td>
            </tfoot>
          </table>
        </div>
        <div class="tab-pane fade" id="comentario">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre de usuario</th>
                <th>Condicion de su viaje</th>
                <th>Texto</th>
                <th>Ciudad que comentaste</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody id="TabComentario">
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
            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
        <div class="tab-pane fade" id="condicion">
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Condicion</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody id="TabCondicion">
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
            </tbody>
            <tfoot>
              <td>
                <ul class="nav nav-pills">
                  <li class="active"><a href="AM_condicion.php">Crear</span></a></li>
                </ul>
              </td>
            </tfoot>
          </table>
        </div>
        <div class="tab-pane fade" id="usuario">
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre de usuario</th>
                <th>E-mail</th>
                <th class="text-center">¿Tiene previlegios de administrador?</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody id="TabUsuario">
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
                      <span onclick="PromoverUsuario({$usuario.id_usuario});" class="glyphicon glyphicon-remove"></span>
                    </a></p>
                    {/if}
                  </td>
                  <td>
                    <a data-toggle="tooltip" data-placement="top" title="Elimine un usuario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarUsuario({$usuario.id_usuario});" class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
                </tr>
                {/foreach}
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
    {include file="footer.tpl"} 