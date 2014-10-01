<?php /* Smarty version Smarty-3.1.14, created on 2014-10-01 20:20:17
         compiled from "./templates/count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:978239133542c059c065962-01569302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9142dd978fcff7b10fada44727609edf842f34' => 
    array (
      0 => './templates/count.tpl',
      1 => 1412187600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '978239133542c059c065962-01569302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542c059c0d1252_54445972',
  'variables' => 
  array (
    'Countcity' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c059c0d1252_54445972')) {function content_542c059c0d1252_54445972($_smarty_tpl) {?>                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Countcity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['i']->value['countcity'];?>

                    <?php } ?><?php }} ?>