<?php /* Smarty version Smarty-3.1.14, created on 2014-09-17 20:59:05
         compiled from "./templates/editar_condicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9778900955419d8a33d7454-13844061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b99cccaf0e761e1ebb68e937dd57f01fa20ecf9' => 
    array (
      0 => './templates/editar_condicion.tpl',
      1 => 1410980343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9778900955419d8a33d7454-13844061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5419d8a3455f75_76450244',
  'variables' => 
  array (
    'Condicion' => 0,
    'condicion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419d8a3455f75_76450244')) {function content_5419d8a3455f75_76450244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                          <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
                          <fieldset>
                            <legend>Condicion</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Condicion del turista</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre" name="condicion" 
                                value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
">
                              </div>
                              </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"></label>
                              <div class="col-lg-10">
                                <input type="hidden" class="form-control" id="inputEmail" placeholder="Nombre" name="id_condicion" 
                                value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
">
                              </div>
                            </div>
                            </div>                                         
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Editar</button>
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