<?php /* Smarty version Smarty-3.1.14, created on 2014-08-31 21:56:04
         compiled from "./templates/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121954925054022189225bb8-37073044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df931d9c55a60433f18e788659ad9663ecb33b46' => 
    array (
      0 => './templates/empresa.tpl',
      1 => 1409514953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121954925054022189225bb8-37073044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5402218927b730_68266621',
  'variables' => 
  array (
    'Empresa' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5402218927b730_68266621')) {function content_5402218927b730_68266621($_smarty_tpl) {?><div class="row">
        <div class="col-md-12" role="main">
          <div class="bs-docs-section">
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
              <!--<a name="<?php echo $_smarty_tpl->tpl_vars['i']->value['id_seccion'];?>
"></a>!-->
              <h1 ><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_categoria'];?>
</h1></br></br>
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</h4>
              </div>
            <?php } ?>
          </div>
        </div>
</div>
</br></br></br></br><?php }} ?>