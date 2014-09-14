<?php /* Smarty version Smarty-3.1.14, created on 2014-09-14 16:02:57
         compiled from "./templates/editar_ciudad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38070822354158fd4c7fd06-98594908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3fea16eec79b8685b12930d995bf162735c89a' => 
    array (
      0 => './templates/editar_ciudad.tpl',
      1 => 1410703330,
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
    'Ciudades' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54158fd4ce8b66_49363841')) {function content_54158fd4ce8b66_49363841($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/opt/lampp/htdocs/UltProy/libs/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                          
                          <fieldset>
                            <legend>Ciudad</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                              <div class="col-lg-10">

                              <?php echo smarty_function_html_options(array('name'=>'ciudades','options'=>$_smarty_tpl->tpl_vars['Ciudades']->value),$_smarty_tpl);?>

                              <select name="ciudades" class="form-group">
                              </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Duracion</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Duracion" name="duracion"
                                value="">
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Precio</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Precio" name="precio"
                                value="">
                              </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label"></label>
                              <div class="col-lg-10">
                                <input type="hidden" class="form-control" id="inputEmail" placeholder="Nombre" name="" 
                                value="">
                              </div>
                            </div>
                            </div>                                         
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Editar</button>
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