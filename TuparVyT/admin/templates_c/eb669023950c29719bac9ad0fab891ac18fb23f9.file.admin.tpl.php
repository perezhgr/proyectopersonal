<?php /* Smarty version Smarty-3.1.14, created on 2014-11-22 15:03:29
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1340954347541591112ed7c1-77948224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1416665003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1340954347541591112ed7c1-77948224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5415911143e749_75288648',
  'variables' => 
  array (
    'Mail' => 0,
    'Ciudad' => 0,
    'ciudad' => 0,
    'Testimonio' => 0,
    'testimonio' => 0,
    'Condicion' => 0,
    'condicion' => 0,
    'Usuario' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5415911143e749_75288648')) {function content_5415911143e749_75288648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
      <?php if (isset($_smarty_tpl->tpl_vars['Mail']->value)){?>
      <h4><strong>Conectado como:</strong><p class="text-success"><?php echo $_smarty_tpl->tpl_vars['Mail']->value;?>
</p></h4>
      <?php }?>
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
              <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
              <tr class="active danger">
                <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</td>
                <td>$&nbsp;<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</td>
                <td>
                  <a href="AM_ciudad.php?id_ciudad=<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                  </a>
                  <a style="cursor:pointer">
                    <span onclick="BorrarCiudad(<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
);" class="glyphicon glyphicon-trash ">
                    </span>
                  </a><br>
                </td>
              </tr>
              <?php } ?>
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
              <?php  $_smarty_tpl->tpl_vars['testimonio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Testimonio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonio']->key => $_smarty_tpl->tpl_vars['testimonio']->value){
$_smarty_tpl->tpl_vars['testimonio']->_loop = true;
?>
              <tr class="active danger">
                <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['condicion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['texto'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['nombre_ciudad'];?>
</td>
                <td>
                  <a data-toggle="tooltip" data-placement="top" title="Elimine un comentario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarComentario(<?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
);" class="glyphicon glyphicon-trash"></span>
                  </a>
                </td>
              </tr>
              <?php } ?>
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
              <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
              <tr class="active danger">
                <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</td>
                <td>
                  <a href="AM_condicion.php?id_condicion=<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Elimine una condicion haciendo click aqui" style="cursor:pointer"><span onclick="BorrarCondicion(<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
);" class="glyphicon glyphicon-trash"></span>
                  </a>
                </td>
              </tr>
              <?php } ?>
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
              <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
              <tr class="active danger">
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['mail'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['usuario']->value['es_admin']==1){?>
                  <p class="text-center"><span class=" glyphicon glyphicon-ok"></span>
                  </a></p>
                  <?php }else{ ?>
                  <p class="text-center">
                    <a data-toggle="tooltip" data-placement="top" title="Cambie los previlegios de un usuario haciendo click aqui" style="cursor:pointer">
                      <span onclick="PromoverUsuario(<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
);" class="glyphicon glyphicon-remove"></span>
                    </a></p>
                    <?php }?>
                  </td>
                  <td>
                    <a data-toggle="tooltip" data-placement="top" title="Elimine un usuario haciendo click aqui" style="cursor:pointer"><span onclick="BorrarUsuario(<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
);" class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>