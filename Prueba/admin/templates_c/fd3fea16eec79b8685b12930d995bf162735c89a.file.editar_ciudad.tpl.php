<?php /* Smarty version Smarty-3.1.14, created on 2014-09-07 22:43:45
         compiled from "./templates/editar_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58858132540cbaca014a39-64387081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3fea16eec79b8685b12930d995bf162735c89a' => 
    array (
      0 => './templates/editar_ciudad.tpl',
      1 => 1410122323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58858132540cbaca014a39-64387081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540cbaca07c539_11785518',
  'variables' => 
  array (
    'Ciudad' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540cbaca07c539_11785518')) {function content_540cbaca07c539_11785518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <li class="active"><a href="#home" data-toggle="tab">Ciudades
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form class="form-horizontal" method="POST"> 
                          <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
                          <fieldset>
                            <legend>Ciudad</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre" name="ciudad" 
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
">
                              </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Pais</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre" name="pais"
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_pais'];?>
">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Duracion" name="duracion"
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['duracion'];?>
">
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Precio" name="precio"
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['precio'];?>
">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Descripcion</label>
                              <div class="col-lg-10">
                                <textarea type="text" rows="6" class="form-control" id="texto"  placeholder="Escriba una descripcion" name="descripcion" ><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['descripcion'];?>
</textarea>
                              </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                              <div class="col-lg-10">
                                <input type="hidden" class="form-control" id="inputEmail" placeholder="Nombre" name="id_ciudad" 
                                value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
">
                              </div>
                            </div>
                            </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label"></label>
                             <input type="file" class="filestyle">
                           </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label"></label>
                             <input type="file" class="filestyle">
                           </div>
                            <div class="form-group">
                             <label for="inputPassword" class="col-lg-2 control-label"></label>
                             <input type="file" class="filestyle">
                           </div>                                               
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Crear</button>
                              </div>
                            </div>
                          </fieldset>
                          <?php } ?>
                        </form>                        
                    </div>
                  </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>