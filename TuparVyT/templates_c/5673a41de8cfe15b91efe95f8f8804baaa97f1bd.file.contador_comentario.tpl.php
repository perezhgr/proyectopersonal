<?php /* Smarty version Smarty-3.1.14, created on 2014-10-25 22:38:41
         compiled from "./templates/contador_comentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123872207544bfad2766946-51327555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5673a41de8cfe15b91efe95f8f8804baaa97f1bd' => 
    array (
      0 => './templates/contador_comentario.tpl',
      1 => 1414269501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123872207544bfad2766946-51327555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544bfad2928e44_96580587',
  'variables' => 
  array (
    'CountComent' => 0,
    'contador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544bfad2928e44_96580587')) {function content_544bfad2928e44_96580587($_smarty_tpl) {?><div >
	<h4>Comentarios&nbsp;&nbsp;
		<?php  $_smarty_tpl->tpl_vars['contador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contador']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CountComent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contador']->key => $_smarty_tpl->tpl_vars['contador']->value){
$_smarty_tpl->tpl_vars['contador']->_loop = true;
?>
		<span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['contador']->value['countcoment'];?>
</span>
		<?php } ?>
	</h4>
</div>	

<?php }} ?>