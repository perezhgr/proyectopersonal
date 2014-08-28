<?php /* Smarty version Smarty-3.1.14, created on 2014-08-28 16:21:40
         compiled from "./templates/paquetes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129801387653ff3af485f5e1-43698800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b5998144eee48343f13fb6150da5e8b32e1f0c' => 
    array (
      0 => './templates/paquetes.tpl',
      1 => 1409235693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129801387653ff3af485f5e1-43698800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Paquete' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ff3af48bade7_91616270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ff3af48bade7_91616270')) {function content_53ff3af48bade7_91616270($_smarty_tpl) {?><table class="table table-hover">
   <caption></caption>
   <thead>
      <tr>
         <th><p align="center">Nombre</p></th>
         <th><p align="center">Duracion</p></th>
         <th><p align="center">Precio</p></th>
      </tr>
   </thead>
   <tbody>
   <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Paquete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
      <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre_ciudad'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['duracion'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['precio'];?>
</td>
   <?php } ?>      
      </tr>
   </tbody>
</table><?php }} ?>