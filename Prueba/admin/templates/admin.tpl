{include file="header.tpl"}
  <body>

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
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs">
                    {foreach from=$Countcity item=i}
                    <li class="active"><a href="#home" data-toggle="tab">Ciudades
                    <span class="badge">{$i.countcity}</span></a></li>
                    {/foreach}
                    {foreach from=$Countcoment item=j}
                    <li><a href="#profile" data-toggle="tab">Testimonios
                    <span class="badge">{$j.countcoment}</span></a></li>
                    {/foreach}
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Ciudad</th>
                            <th>Duracion</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
                          {foreach from=$Ciudad item=ciudad}
                          <tr class="active danger">
                            <td>{$ciudad.id_ciudad}</td>
                            <td>{$ciudad.nombre_ciudad}</td>
                            <td>{$ciudad.duracion}</td>
                            <td>{$ciudad.precio}</td>
                            <td>{$ciudad.descripcion}</td>
                            <td>
                              <a href="AM_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar_ciudad.php?id_ciudad={$ciudad.id_ciudad}"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>
                          </tr>
                          {/foreach}
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_ciudad.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="profile">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Persona</th>
                            <th>Condicion</th>
                            <th>Fecha</th>
                            <th>Texto</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          {foreach from=$Testimonio item=testimonio}
                          <tr class="active danger">
                            <td>{$testimonio.id_persona}</td>
                            <td>{$testimonio.nombre_persona}</td>
                            <td>{$testimonio.condicion}</td>
                            <td>{$testimonio.fecha}</td>
                            <td>{$testimonio.texto}</td>
                            <td>
                              <a href="AM_comentario.php?id_persona={$testimonio.id_persona}"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar_comentario.php?id_persona={$testimonio.id_persona}"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          {/foreach}
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="AM_comentario.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>   
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
{include file="footer.tpl"}        