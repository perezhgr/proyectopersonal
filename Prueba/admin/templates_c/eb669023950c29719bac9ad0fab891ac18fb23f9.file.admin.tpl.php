<?php /* Smarty version Smarty-3.1.14, created on 2014-09-07 21:05:38
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757746597540c9ae3df5640-92654640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1410116733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757746597540c9ae3df5640-92654640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540c9ae404c896_83020031',
  'variables' => 
  array (
    'Countcity' => 0,
    'i' => 0,
    'Countcoment' => 0,
    'j' => 0,
    'Ciudad' => 0,
    'ciudad' => 0,
    'Testimonio' => 0,
    'testimonio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c9ae404c896_83020031')) {function content_540c9ae404c896_83020031($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <li class="active"><a href="#home" data-toggle="tab">Ciudades
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['i']->value['countcity'];?>
</span></a></li>
                    <?php } ?>
                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcoment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
                    <li><a href="#profile" data-toggle="tab">Testimonios
                    <span class="badge"><?php echo $_smarty_tpl->tpl_vars['j']->value['countcoment'];?>
</span></a></li>
                    <?php } ?>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Duracion</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_pais'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['descripcion'];?>
</td>
                            <td>
                              <a href="editar_ciudad.html"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar.php"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="ABM_ciudad.php">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="profile">
                      <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>#(Comentario)</th>
                            <th>Persona</th>
                            <th>Condicion</th>
                            <th>Fecha</th>
                            <th>Texto</th>
                            <th>Accion</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php  $_smarty_tpl->tpl_vars['testimonio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Testimonio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonio']->key => $_smarty_tpl->tpl_vars['testimonio']->value){
$_smarty_tpl->tpl_vars['testimonio']->_loop = true;
?>
                          <tr class="active danger">
                            <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['id_comentario'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['nombre_persona'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['condicion'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['fecha'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['testimonio']->value['texto'];?>
</td>
                            <td>
                              <a href="editar_testimonio.html"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a href="borrar.php"><span class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                            <td>
                            <ul class="nav nav-pills">
                              <li class="active"><a href="crear_testimonios.html">Crear</span></a></li>
                              </ul>
                            </td>
                        </tfoot>
                      </table> 
                    </div>   
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        <?php }} ?>