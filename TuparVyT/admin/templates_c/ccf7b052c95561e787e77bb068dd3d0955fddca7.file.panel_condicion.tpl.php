<?php /* Smarty version Smarty-3.1.14, created on 2014-10-06 22:39:03
         compiled from "./templates/panel_condicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2616630305432fde7a690e7-93120264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf7b052c95561e787e77bb068dd3d0955fddca7' => 
    array (
      0 => './templates/panel_condicion.tpl',
      1 => 1412627929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2616630305432fde7a690e7-93120264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Condicion' => 0,
    'condicion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5432fde7f30d91_85882778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5432fde7f30d91_85882778')) {function content_5432fde7f30d91_85882778($_smarty_tpl) {?>                        <?php  $_smarty_tpl->tpl_vars['condicion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condicion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Condicion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condicion']->key => $_smarty_tpl->tpl_vars['condicion']->value){
$_smarty_tpl->tpl_vars['condicion']->_loop = true;
?>
                          <tr class="active danger">
                            <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['condicion']->value['condicion'];?>
</td>
                            <td>
                              <a href="AM_condicion.php?id_condicion=<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
"><span class="glyphicon glyphicon-pencil">&nbsp&nbsp</span>
                              </a>
                              <a data-toggle="tooltip" data-placement="top" title="Elimine una condicion haciendo click aqui" style="cursor:pointer"><span onclick="BorrarCondicion(<?php echo $_smarty_tpl->tpl_vars['condicion']->value['id_condicion'];?>
);" class="glyphicon glyphicon-trash"></span>
                              </a>                           
                            </td>                            
                          </tr>
                          <?php } ?><?php }} ?>