<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 20:20:07
         compiled from "./templates/comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:935602893542308c61e4914-32350852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c8bc7d70edfb520fa336f38cd61fe19ba5a240' => 
    array (
      0 => './templates/comentario.tpl',
      1 => 1411582801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '935602893542308c61e4914-32350852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542308c6238085_29690733',
  'variables' => 
  array (
    'Comentario' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542308c6238085_29690733')) {function content_542308c6238085_29690733($_smarty_tpl) {?>                  <!-- COMENTARIO-->
                    <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                      <p class="text-left"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['nombre'];?>
 (<?php echo $_smarty_tpl->tpl_vars['comentario']->value['condicion'];?>
) dijo:<br>
                      <br>
                      <?php echo $_smarty_tpl->tpl_vars['comentario']->value['texto'];?>
</p><br>
                    <?php } ?><?php }} ?>