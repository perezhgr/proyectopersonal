<?php /* Smarty version Smarty-3.1.14, created on 2014-09-09 00:16:06
         compiled from "./templates/crear_testimonio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855100354540e22938a3ef7-02914618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b8871eb006ee0f9aa39c61f621db34a97e7e5f' => 
    array (
      0 => './templates/crear_testimonio.tpl',
      1 => 1410214559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855100354540e22938a3ef7-02914618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_540e2293900157_24763509',
  'variables' => 
  array (
    'Condicion' => 0,
    'condicion' => 0,
    'Ciudad' => 0,
    'ciudad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540e2293900157_24763509')) {function content_540e2293900157_24763509($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    <li class="active"><a href="#home" data-toggle="tab">Testimonios
                    </a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <form class="form-horizontal">
                          <fieldset>
                            <legend>Testimonios</legend>
                            <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Persona</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Nombre de persona" name="persona">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="select" class="col-lg-2 control-label">Condicion</label>
                              <div class="col-lg-10">
                                <select class="form-control" id="select" >
                                  <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>  
                                  <option name="id_condicion"value="<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                                                        <div class="form-group">
                              <label for="select" class="col-lg-2 control-label">Ciudad que deseas comentar</label>
                              <div class="col-lg-10">
                                <select class="form-control" id="select" >
                                  <?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>  
                                  <option name="id_ciudad"value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['id_ciudad'];?>
"><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre_ciudad'];?>
</option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                           <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Fecha</label>
                              <div class="col-lg-10">
                                <input type="date" class="form-control" id="inputPassword" placeholder="Fecha del viaje (aaaa-mm-dd)" name="fecha">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Comentario</label>
                              <div class="col-lg-10">
                                <textarea type="text" rows="6" class="form-control" id="texto"  placeholder="Escriba un comentario" name="comentario"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary btn-">Crear</button>
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