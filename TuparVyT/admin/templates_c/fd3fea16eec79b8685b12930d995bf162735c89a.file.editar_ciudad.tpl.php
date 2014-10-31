<?php /* Smarty version Smarty-3.1.14, created on 2014-10-30 14:48:17
         compiled from "./templates/editar_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38070822354158fd4c7fd06-98594908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3fea16eec79b8685b12930d995bf162735c89a' => 
    array (
      0 => './templates/editar_ciudad.tpl',
      1 => 1414676849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38070822354158fd4c7fd06-98594908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54158fd4ce8b66_49363841',
  'variables' => 
  array (
    'Mail' => 0,
    'Ciudades' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54158fd4ce8b66_49363841')) {function content_54158fd4ce8b66_49363841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Ciudades
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form id="formeditarciudad" class="form-horizontal" method="POST"> 
                          
                          <fieldset>
                            <legend>Ciudad</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                            <div class="col-lg-10">
                                 <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                                 <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
">
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="duracion" placeholder="Duracion" name="duracion"
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
">
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="precio" placeholder="Precio" name="precio"
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
">
                              </div>

                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"></label>
                              <div class="col-lg-10">
                                <input type="hidden" class="form-control" placeholder="Nombre" name="id_ciudad" 
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
">
                              </div>
                              <?php } ?>
                            </div>
                            </div>                                         
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button id="botoneditarciudad" type="submit" class="btn btn-primary btn-">Editar</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>                        
                    </div>
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>